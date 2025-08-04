<?php
// Sadece init.php'yi çağırmamız yeterli, o her şeyi halleder.
require_once '../core/init.php';

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $full_name = trim($_POST['fullname'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    // Veri Doğrulama
    if (empty($full_name)) {
        $errors[] = "Ad Soyad alanı zorunludur.";
    }

    if (empty($email)) {
        $errors[] = "E-posta alanı zorunludur.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Geçersiz e-posta formatı.";
    } elseif (!is_valid_email_provider($email)) {
        $errors[] = "Lütfen genel bir e-posta sağlayıcısı (örn: Gmail, Outlook) kullanın.";
    }

    if (empty($password)) {
        $errors[] = "Şifre alanı zorunludur.";
    } elseif (strlen($password) < 8) {
        $errors[] = "Şifre en az 8 karakter olmalıdır.";
    }

    // Veritabanı İşlemleri
    if (empty($errors)) {
        try {
            $pdo = get_pdo_connection();

            $stmt = $pdo->prepare("SELECT id FROM users WHERE email = :email");
            $stmt->execute(['email' => $email]);
            
            if ($stmt->fetch()) {
                $errors[] = "Bu e-posta adresi zaten kayıtlı.";
            } else {
                $password_hash = password_hash($password, PASSWORD_ARGON2ID);
                
                $pdo->beginTransaction();

                $insert_user_stmt = $pdo->prepare(
                    "INSERT INTO users (full_name, email, password_hash, status) VALUES (:full_name, :email, :password_hash, 'pending_verification')"
                );
                $insert_user_stmt->execute([
                    'full_name' => $full_name,
                    'email' => $email,
                    'password_hash' => $password_hash
                ]);
                $user_id = $pdo->lastInsertId();

                $token = bin2hex(random_bytes(32));
                $expires_at = date('Y-m-d H:i:s', strtotime('+1 hour'));

                $insert_token_stmt = $pdo->prepare(
                    "INSERT INTO email_verifications (user_id, token, expires_at) VALUES (:user_id, :token, :expires_at)"
                );
                $insert_token_stmt->execute([
                    'user_id' => $user_id,
                    'token' => $token,
                    'expires_at' => $expires_at
                ]);
                
                $pdo->commit();

                // --- E-POSTA GÖNDERME KODU BURAYA GELECEK ---
                // $verification_link = BASE_URL . "/auth/verify.php?token=" . $token;
                // mail($email, "KAI Hesabınızı Doğrulayın", "Lütfen linke tıklayın: " . $verification_link);
                
                $_SESSION['success_message'] = "Kayıt başarılı! Hesabınızı doğrulamak için lütfen e-postanızı kontrol edin.";
                header("Location: login.php");
                exit();
            }

        } catch (PDOException $e) {
            if ($pdo->inTransaction()) {
                $pdo->rollBack();
            }
            $errors[] = "Bir veritabanı hatası oluştu. Lütfen daha sonra tekrar deneyin.";
        }
    }
}

if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header("Location: signup.php");
    exit();
}
