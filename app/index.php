<?php
// Dil seçimini URL parametresinden al (örn: index.php?lang=tr)
$lang = isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'tr']) ? $_GET['lang'] : 'tr';
$lang_file = __DIR__ . '/../lang/' . $lang . '.json';

// Dil dosyası var mı kontrol et, yoksa varsayılan olarak Türkçe'yi kullan
if (!file_exists($lang_file)) {
    $lang_file = __DIR__ . '/../lang/tr.json';
}

// JSON dosyasını oku ve içeriğini bir PHP dizisine çevir
$text = json_decode(file_get_contents($lang_file), true);

// Metinleri XSS koruması ile almak için bir yardımcı fonksiyon
function e($string, $placeholders = []) {
    global $text;
    $value = isset($text[$string]) ? $text[$string] : $string;
    // Placeholderları değiştir
    foreach ($placeholders as $key => $placeholderValue) {
        $value = str_replace(':' . $key, htmlspecialchars($placeholderValue, ENT_QUOTES, 'UTF-8'), $value);
    }
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e('title'); ?></title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="m/favicon.ico" type="image/x-icon">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
        }
    </style>
</head>
<body class="bg-gray-900 text-white">

    <!-- Header -->
    <header class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <div class="text-2xl font-bold">
                <a href="#">KAI</a>
            </div>
            <nav class="hidden md:flex items-center space-x-6">
                <a href="#features" class="hover:text-blue-400 transition-colors"><?php echo e('nav_features'); ?></a>
                <a href="#about" class="hover:text-blue-400 transition-colors"><?php echo e('nav_about'); ?></a>
            </nav>
            <div class="flex items-center space-x-4">
                 <a href="?lang=<?php echo $lang === 'tr' ? 'en' : 'tr'; ?>" class="text-sm border border-gray-600 rounded-full px-3 py-1 hover:bg-gray-700 transition-colors">
                    <?php echo $lang === 'tr' ? 'EN' : 'TR'; ?>
                </a>
                <a href="/app/" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded-lg transition-colors">
                    <?php echo e('cta_button_app'); ?>
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <main class="container mx-auto px-6 text-center py-20 md:py-32">
        <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-4">
            <?php echo e('hero_title'); ?>
        </h1>
        <p class="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto mb-8">
            <?php echo e('hero_subtitle'); ?>
        </p>
        <a href="/app/" class="bg-blue-600 hover:bg-blue-700 text-white font-bold text-lg px-8 py-4 rounded-lg transition-transform transform hover:scale-105">
            <?php echo e('hero_cta_button'); ?>
        </a>
    </main>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-gray-800">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12"><?php echo e('features_title'); ?></h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <!-- Feature 1: Pomodoro -->
                <div class="bg-gray-900 p-8 rounded-xl">
                    <div class="text-blue-500 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2"><?php echo e('feature1_title'); ?></h3>
                    <p class="text-gray-400"><?php echo e('feature1_desc'); ?></p>
                </div>
                <!-- Feature 2: Kanban -->
                <div class="bg-gray-900 p-8 rounded-xl">
                    <div class="text-blue-500 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2"><?php echo e('feature2_title'); ?></h3>
                    <p class="text-gray-400"><?php echo e('feature2_desc'); ?></p>
                </div>
                <!-- Feature 3: Analytics -->
                <div class="bg-gray-900 p-8 rounded-xl">
                    <div class="text-blue-500 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                            <path stro  ke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2"><?php echo e('feature3_title'); ?></h3>
                    <p class="text-gray-400"><?php echo e('feature3_desc'); ?></p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="bg-gray-900 text-center py-8">
        <div class="container mx-auto px-6">
            <p class="text-gray-500">&copy; <?php echo date("Y"); ?> KAI. <?php echo e('footer_rights'); ?></p>
        </div>
    </footer>

</body>
</html>
