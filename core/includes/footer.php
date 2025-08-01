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
<body>
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
                    <a href="<?php echo BASE_URL; ?>/auth/login.php" class="hidden sm:block text-sm font-semibold px-4 py-2 rounded-md transition-colors" style="background-color: var(--color-button-primary-bg); color: var(--color-button-primary-text);" onmouseover="this.style.backgroundColor='var(--color-button-primary-hover-bg)'" onmouseout="this.style.backgroundColor='var(--color-button-primary-bg)'">Uygulamaya Git</a>
                </div>
            </div>
        </div>
    </header>
