<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? htmlspecialchars($page_title) : 'KAI'; ?></title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Lexend:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/main/css/base.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/main/css/components/animations.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/main/css/components/cards.css">
    
    <?php if (isset($page_specific_css)): ?>
        <link rel="stylesheet" href="<?php echo BASE_URL . $page_specific_css; ?>">
    <?php endif; ?>
</head>
<body class="antialiased">
    <header>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center space-x-8">
                    <a href="<?php echo BASE_URL; ?>/" class="font-logo text-2xl font-bold tracking-tighter">KAI</a>
                    <nav class="hidden md:flex space-x-6">
                        <a href="<?php echo BASE_URL; ?>/#features" class="text-sm font-medium hover:text-white transition-colors">Özellikler</a>
                        <a href="<?php echo BASE_URL; ?>/pricing.php" class="text-sm font-medium hover:text-white transition-colors">Fiyatlandırma</a>
                        <a href="<?php echo BASE_URL; ?>/changelog.php" class="text-sm font-medium hover:text-white transition-colors">Yenilikler</a>
                    </nav>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="relative hidden md:block">
                        <button id="lang-menu-button" type="button" class="flex items-center justify-center w-9 h-9 rounded-md hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-900 focus:ring-white transition-colors">
                            <svg style="color: var(--color-text-secondary);" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C13.18 7.061 14.285 7 15 7s1.82.061 2.666.214m-2.666 0V3" />
                            </svg>
                        </button>
                        <div id="language-menu" class="language-menu origin-top-right absolute right-0 mt-2 w-32 rounded-md shadow-lg bg-[#181818]/95 backdrop-blur-sm ring-1 ring-white/10 focus:outline-none opacity-0 transform scale-95 pointer-events-none" role="menu" aria-orientation="vertical" aria-labelledby="lang-menu-button">
                            <div class="py-1" role="none">
                                <a href="?lang=tr" class="block px-4 py-2 text-sm" style="color: var(--color-text-primary); background-color: transparent;" onmouseover="this.style.backgroundColor='var(--color-surface-hover)'" onmouseout="this.style.backgroundColor='transparent'" role="menuitem">Türkçe</a>
                                <a href="?lang=en" class="block px-4 py-2 text-sm" style="color: var(--color-text-primary); background-color: transparent;" onmouseover="this.style.backgroundColor='var(--color-surface-hover)'" onmouseout="this.style.backgroundColor='transparent'" role="menuitem">English</a>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo BASE_URL; ?>/auth/login.php" class="hidden sm:block text-sm font-semibold px-4 py-2 rounded-md transition-colors" style="background-color: var(--color-button-primary-bg); color: var(--color-button-primary-text);" onmouseover="this.style.backgroundColor='var(--color-button-primary-hover-bg)'" onmouseout="this.style.backgroundColor='var(--color-button-primary-bg)'">Uygulamaya Git</a>
                    <div class="md:hidden">
                        <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center p-2 rounded-md hover:bg-white/10" style="color: var(--color-text-secondary);" onmouseover="this.style.color='var(--color-text-primary)'" onmouseout="this.style.color='var(--color-text-secondary)'">
                            <span class="sr-only">Menüyü aç</span>
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="mobile-nav" class="mobile-nav md:hidden absolute top-16 inset-x-0 bg-gray-900/95 p-4 transform -translate-y-[120%] border-b" style="border-color: var(--color-border);">
            <nav class="flex flex-col space-y-4">
                <a href="<?php echo BASE_URL; ?>/#features" class="text-base font-medium hover:text-white transition-colors px-2 py-1 rounded-md" style="color: var(--color-text-secondary);">Özellikler</a>
                <a href="<?php echo BASE_URL; ?>/pricing.php" class="text-base font-medium hover:text-white transition-colors px-2 py-1 rounded-md" style="color: var(--color-text-secondary);">Fiyatlandırma</a>
                <a href="<?php echo BASE_URL; ?>/changelog.php" class="text-base font-medium hover:text-white transition-colors px-2 py-1 rounded-md" style="color: var(--color-text-secondary);">Yenilikler</a>
                <a href="<?php echo BASE_URL; ?>/auth/login.php" class="w-full text-center text-sm font-semibold px-4 py-2.5 rounded-md transition-colors mt-4" style="background-color: var(--color-button-primary-bg); color: var(--color-button-primary-text);" onmouseover="this.style.backgroundColor='var(--color-button-primary-hover-bg)'" onmouseout="this.style.backgroundColor='var(--color-button-primary-bg)'">Uygulamaya Git</a>
            </nav>
        </div>
    </header>
