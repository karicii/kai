<?php require_once '../core/init.php'; ?>
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
        <div class="text-center lg:text-left mb-8">
            <a href="<?php echo BASE_URL; ?>/" class="kai-logo-wordmark">
                <span class="logo-text">Kai</span>
                <span class="logo-icon-wrapper">
                    <span class="logo-icon">K</span>
                </span>
            </a>
        </div>

        <div class="bg-[#121212]/80 backdrop-blur-sm p-8 rounded-xl border border-[var(--color-border)]">
            <h1 class="text-xl font-semibold text-center mb-2">Hesabınıza giriş yapın</h1>
            <p class="text-sm text-center mb-6" style="color: var(--color-text-secondary);">Devam etmek için bir yol seçin</p>

            <?php if (isset($_SESSION['success_message'])): ?>
                <div class="bg-green-500/10 border border-green-500/30 text-green-300 text-sm p-4 rounded-lg mb-6">
                    <?php echo htmlspecialchars($_SESSION['success_message']); ?>
                </div>
                <?php unset($_SESSION['success_message']); ?>
            <?php endif; ?>

            <?php if (isset($_SESSION['errors'])): ?>
                <div class="bg-red-500/10 border border-red-500/30 text-red-300 text-sm p-4 rounded-lg mb-6">
                    <ul class="list-disc pl-5">
                        <?php foreach ($_SESSION['errors'] as $error): ?>
                            <li><?php echo htmlspecialchars($error); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php unset($_SESSION['errors']); ?>
            <?php endif; ?>

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
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    Github ile Devam Et
                </button>
                 <button class="social-button w-full flex items-center justify-center py-2.5 rounded-md">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 24 24"><path d="M5.042 15.165a2.528 2.528 0 0 1-2.52 2.523A2.528 2.528 0 0 1 0 15.165a2.527 2.527 0 0 1 2.522-2.52h2.52v2.52zM6.313 15.165a2.527 2.527 0 0 1 2.521-2.52 2.527 2.527 0 0 1 2.521 2.52v6.313A2.527 2.527 0 0 1 8.834 24a2.527 2.527 0 0 1-2.521-2.522v-6.313zM8.834 5.042a2.528 2.528 0 0 1 2.523-2.52A2.528 2.528 0 0 1 13.88 5.042a2.527 2.527 0 0 1-2.523 2.521h-2.52V5.042zM8.834 6.313a2.527 2.527 0 0 1-2.52 2.521A2.527 2.527 0 0 1 3.792 6.313V0A2.527 2.527 0 0 1 6.313 2.522a2.527 2.527 0 0 1 2.521 2.52v6.313zM15.165 8.834a2.528 2.528 0 0 1 2.523 2.523A2.528 2.528 0 0 1 15.165 13.88a2.527 2.527 0 0 1-2.521-2.523v-2.52h2.52zM15.165 8.834a2.527 2.527 0 0 1-2.521 2.523A2.527 2.527 0 0 1 10.122 8.834V2.522A2.527 2.527 0 0 1 12.644 0a2.527 2.527 0 0 1 2.521 2.522v6.312zM18.958 15.165a2.528 2.528 0 0 1-2.523-2.523A2.528 2.528 0 0 1 18.958 10.12a2.527 2.527 0 0 1 2.521 2.522v2.521h-2.52zM17.688 15.165a2.527 2.527 0 0 1-2.523 2.521A2.527 2.527 0 0 1 12.644 15.165v-6.312A2.527 2.527 0 0 1 15.165 6.33a2.527 2.527 0 0 1 2.523 2.521v6.314z"/></svg>
                    Slack ile Devam Et
                </button>
            </div>

            <div class="flex items-center my-6">
                <hr class="w-full" style="border-color: var(--color-border);">
                <span class="px-2 text-xs" style="color: var(--color-text-secondary);">VEYA</span>
                <hr class="w-full" style="border-color: var(--color-border);">
            </div>

            <form action="login-handler.php" method="POST" class="space-y-4">
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
