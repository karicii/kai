<?php require_once '../core/config.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAI'ye Kayıt Ol</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Lexend:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/auth/css/style.css">
</head>
<body class="min-h-screen">
    
    <div class="flex min-h-screen">
        <div class="hidden lg:flex lg:w-1/2 bg-black/50 relative items-center justify-center p-12 text-center overflow-hidden">
            <div class="animation-container">
                <div class="shape shape1"></div>
                <div class="shape shape2"></div>
                <div class="shape shape3"></div>
            </div>
            <div class="aurora-background"></div>
            <div class="relative z-10">
                <h2 class="text-4xl font-extrabold text-white mb-4">Verimliliğinizi Serbest Bırakın</h2>
                <p class="text-lg" style="color: var(--color-text-secondary);">
                    KAI ile görevlerinizi yönetin, odaklanma sürelerinizi takip edin ve hedeflerinize daha hızlı ulaşın.
                </p>
            </div>
        </div>

        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 backdrop-blur-sm lg:backdrop-blur-none">
            <div class="w-full max-w-sm mx-auto">
                <div class="text-center lg:text-left mb-8">
                    <a href="<?php echo BASE_URL; ?>/" class="font-logo text-3xl font-bold tracking-tighter">KAI</a>
                </div>

                <div class="bg-transparent">
                    <h1 class="text-2xl font-semibold mb-2">Hesap oluştur</h1>
                    <p class="text-sm mb-8" style="color: var(--color-text-secondary);">Başlamak için bilgilerinizi girin.</p>

                    <form action="" method="POST" class="space-y-4">
                        <div>
                            <label for="fullname" class="sr-only">Ad Soyad</label>
                            <input type="text" name="fullname" id="fullname" placeholder="Adınız Soyadınız" required class="form-input w-full px-3 py-2.5 rounded-md text-sm placeholder-gray-500">
                        </div>
                        <div>
                            <label for="email" class="sr-only">E-posta</label>
                            <input type="email" name="email" id="email" placeholder="E-posta adresiniz" required class="form-input w-full px-3 py-2.5 rounded-md text-sm placeholder-gray-500">
                        </div>
                         <div>
                            <label for="password" class="sr-only">Şifre</label>
                            <input type="password" name="password" id="password" placeholder="Şifreniz" required class="form-input w-full px-3 py-2.5 rounded-md text-sm placeholder-gray-500">
                        </div>
                        <button type="submit" class="w-full font-semibold py-2.5 rounded-md transition-colors" style="background-color: var(--color-button-primary-bg); color: var(--color-button-primary-text);" onmouseover="this.style.backgroundColor='var(--color-button-primary-hover-bg)'" onmouseout="this.style.backgroundColor='var(--color-button-primary-bg)'">Hesap Oluştur</button>
                    </form>
                </div>

                <div class="text-center mt-6">
                    <p class="text-sm" style="color: var(--color-text-secondary);">
                        Zaten bir hesabın var mı? <a href="<?php echo BASE_URL; ?>/auth/login.php" class="font-medium text-white hover:underline">Giriş Yap</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/auth/js/signup-animation.js"></script>
</body>
</html>
