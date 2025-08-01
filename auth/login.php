<?php require_once '../core/config.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAI'ye Giriş Yap</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Lexend:wght@700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/auth/css/style.css">
</head>
<body class="flex items-center justify-center min-h-screen p-4">
    
    <div class="aurora-background"></div>

    <div class="relative w-full max-w-sm mx-auto">
        <div class="text-center mb-8">
<a href="<?php echo BASE_URL; ?>/" class="kai-logo-wordmark">
    <span class="logo-text">Kai</span>
    <span class="logo-icon-wrapper">
        <span class="logo-icon">K</span>
    </span>
</a>        </div>

        <div class="bg-[#121212]/80 backdrop-blur-sm p-8 rounded-xl border border-[var(--color-border)]">
            <h1 class="text-xl font-semibold text-center mb-2">Hesabınıza giriş yapın</h1>
            <p class="text-sm text-center mb-6" style="color: var(--color-text-secondary);">Devam etmek için bir yol seçin</p>

            <div class="space-y-3 mb-6">
                <button class="social-button w-full flex items-center justify-center py-2.5 rounded-md">
                    <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.223,0-9.657-3.657-11.303-8H6.306C9.656,39.663,16.318,44,24,44z"/><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.574l6.19,5.238C39.904,36.218,44,30.606,44,24C44,22.659,43.862,21.35,43.611,20.083z"/></svg>
                    Google ile Devam Et
                </button>
                <button class="social-button w-full flex items-center justify-center py-2.5 rounded-md">
                    <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M12,2.24C10.29,2.24,8.44,2.94,7.34,4.24c-1.34,1.52-2.1,3.6-2.1,5.47c0,3.4,2.1,5.8,5.15,5.8c1.24,0,2.24-0.4,3.19-1.2l-1.44-1.29c-0.6,0.54-1.34,0.89-2.04,0.89c-1.89,0-3.29-1.44-3.29-3.64s1.39-3.64,3.29-3.64c1.89,0,3.29,1.44,3.29,3.64c0,0.24-0.05,0.49-0.1,0.73h-3.19V9.9h4.64c0.05-0.24,0.1-0.49,0.1-0.73C16.34,5.64,14.54,2.24,12,2.24z"/></svg>
                    Apple ile Devam Et
                </button>
                   <button class="social-button w-full flex items-center justify-center py-2.5 rounded-md">
                    <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M12,2.24C10.29,2.24,8.44,2.94,7.34,4.24c-1.34,1.52-2.1,3.6-2.1,5.47c0,3.4,2.1,5.8,5.15,5.8c1.24,0,2.24-0.4,3.19-1.2l-1.44-1.29c-0.6,0.54-1.34,0.89-2.04,0.89c-1.89,0-3.29-1.44-3.29-3.64s1.39-3.64,3.29-3.64c1.89,0,3.29,1.44,3.29,3.64c0,0.24-0.05,0.49-0.1,0.73h-3.19V9.9h4.64c0.05-0.24,0.1-0.49,0.1-0.73C16.34,5.64,14.54,2.24,12,2.24z"/></svg>
                    Github ile Devam Et
                </button>
                   <button class="social-button w-full flex items-center justify-center py-2.5 rounded-md">
                    <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M12,2.24C10.29,2.24,8.44,2.94,7.34,4.24c-1.34,1.52-2.1,3.6-2.1,5.47c0,3.4,2.1,5.8,5.15,5.8c1.24,0,2.24-0.4,3.19-1.2l-1.44-1.29c-0.6,0.54-1.34,0.89-2.04,0.89c-1.89,0-3.29-1.44-3.29-3.64s1.39-3.64,3.29-3.64c1.89,0,3.29,1.44,3.29,3.64c0,0.24-0.05,0.49-0.1,0.73h-3.19V9.9h4.64c0.05-0.24,0.1-0.49,0.1-0.73C16.34,5.64,14.54,2.24,12,2.24z"/></svg>
                    Slack ile Devam Et
                </button>
            </div>

            <div class="flex items-center my-6">
                <hr class="w-full" style="border-color: var(--color-border);">
                <span class="px-2 text-xs" style="color: var(--color-text-secondary);">VEYA</span>
                <hr class="w-full" style="border-color: var(--color-border);">
            </div>

            <form action="" method="POST" class="space-y-4">
                <div>
                    <label for="email" class="sr-only">E-posta</label>
                    <input type="email" name="email" id="email" placeholder="E-posta adresiniz" required class="form-input w-full px-3 py-2.5 rounded-md text-sm placeholder-gray-500 focus:outline-none">
                </div>
                 <div>
                    <label for="password" class="sr-only">Şifre</label>
                    <input type="password" name="password" id="password" placeholder="Şifreniz" required class="form-input w-full px-3 py-2.5 rounded-md text-sm placeholder-gray-500 focus:outline-none">
                </div>
                <button type="submit" class="w-full font-semibold py-2.5 rounded-md transition-colors" style="background-color: var(--color-button-primary-bg); color: var(--color-button-primary-text);" onmouseover="this.style.backgroundColor='var(--color-button-primary-hover-bg)'" onmouseout="this.style.backgroundColor='var(--color-button-primary-bg)'">Devam Et</button>
            </form>
        </div>

        <div class="text-center mt-6">
            <p class="text-sm" style="color: var(--color-text-secondary);">
                Hesabın yok mu? <a href="<?php echo BASE_URL; ?>/auth/signup.php" class="font-medium text-white hover:underline">Kayıt Ol</a>
            </p>
        </div>
    </div>

</body>
</html>
