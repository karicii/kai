<?php
require_once '../core/init.php';
$token = $_GET['token'] ?? null;
if (!$token) {
    header("Location: " . BASE_URL);
    exit();
}
try {
    $pdo = get_pdo_connection();
    $stmt = $pdo->prepare("SELECT * FROM email_verifications WHERE token = :token AND expires_at > NOW()");
    $stmt->execute(['token' => $token]);
    $verification = $stmt->fetch();
    if ($verification) {
        $user_id = $verification['user_id'];
        $update_stmt = $pdo->prepare("UPDATE users SET status = 'active' WHERE id = :user_id"); // bu kısım muallak çalışıyor test et 5A2025
        $update_stmt->execute(['user_id' => $user_id]);
        $delete_stmt = $pdo->prepare("DELETE FROM email_verifications WHERE id = :id");
        $delete_stmt->execute(['id' => $verification['id']]);
        $_SESSION['success_message'] = "Hesabınız başarıyla doğrulandı. Şimdi giriş yapabilirsiniz.";
    } else {
        $_SESSION['errors'] = ["Doğrulama linki geçersiz veya süresi dolmuş."];
    }
} catch (PDOException $e) {
    $_SESSION['errors'] = ["Doğrulama sırasında bir hata oluştu."];
}
header("Location: login.php");
exit();
