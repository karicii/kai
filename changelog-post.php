<?php 
require_once 'core/config.php'; 

// --- BACKEND ENTEGRASYONU İÇİN ÖRNEK VERİ ---
// Gerçekte bu veriler, URL'deki ID'ye göre veritabanından çekilecek.
$post_title = "v1.1.0: Ekip Özellikleri Yayında!";
$post_date = "1 Ağustos 2025";
$post_tags = [
    ['name' => 'Yeni Özellik', 'color' => 'blue'],
    ['name' => 'Ekip', 'color' => 'gray']
];
$post_content = '
    <p>KAI\'yi bir sonraki seviyeye taşıyan ekip özelliklerini sunmaktan heyecan duyuyoruz. Artık projelerinizi sadece kendiniz için değil, tüm takımınız için bir verimlilik merkezine dönüştürebilirsiniz.</p>
    
    <h2>Neler Yeni?</h2>
    <p>Bu sürümle birlikte gelen üç ana yenilik:</p>
    <ul>
        <li><strong>Paylaşılan Panolar:</strong> Proje panolarınızı ekip üyelerinizle paylaşın. Herkesin aynı hedefe odaklanmasını sağlayın.</li>
        <li><strong>Görev Atama:</strong> Kanban kartları üzerinden doğrudan ekip üyelerinize görevler atayın ve son teslim tarihleri belirleyin.</li>
        <li><strong>Gerçek Zamanlı Güncellemeler:</strong> Birisi bir kartı taşıdığında veya bir görevi tamamladığında, bu değişiklik anında tüm paylaşılan panolara yansır.</li>
    </ul>

    <h3>Gelecek Adımlar</h3>
    <p>Sıradaki hedefimiz, ekipler için detaylı analitik ve raporlama özellikleri eklemek. Geri bildirimleriniz bizim için çok değerli, <a href="/contact.php">iletişim</a> sayfasından bize ulaşmaktan çekinmeyin.</p>
';
// --- ÖRNEK VERİ SONU ---

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($post_title); ?> - KAI</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Lexend:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/main/css/base.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/main/css/pages/changelog.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/main/css/pages/changelog-post.css">
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
                        <a href="<?php echo BASE_URL; ?>/changelog.php" class="text-sm font-medium text-white transition-colors">Yenilikler</a>
                    </nav>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="<?php echo BASE_URL; ?>/auth/login.php" class="hidden sm:block text-sm font-semibold px-4 py-2 rounded-md transition-colors" style="background-color: var(--color-button-primary-bg); color: var(--color-button-primary-text);" onmouseover="this.style.backgroundColor='var(--color-button-primary-hover-bg)'" onmouseout="this.style.backgroundColor='var(--color-button-primary-bg)'">Uygulamaya Git</a>
                </div>
            </div>
        </div>
    </header>

    <main class="relative overflow-hidden">
        <section class="relative z-10 py-20 md:py-32">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto">
                    <div class="mb-12">
                        <a href="<?php echo BASE_URL; ?>/changelog.php" class="text-sm inline-flex items-center hover:underline" style="color: var(--color-text-secondary);"><svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>Tüm Güncellemeler</a>
                        <p class="text-sm mt-8" style="color: var(--color-text-secondary);"><?php echo htmlspecialchars($post_date); ?></p>
                        <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight mt-2 mb-4"><?php echo htmlspecialchars($post_title); ?></h1>
                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($post_tags as $tag): ?>
                                <span class="changelog-tag" style="background-color: <?php echo $tag['color'] === 'blue' ? 'rgba(59, 130, 246, 0.1)' : 'rgba(234, 234, 234, 0.1)'; ?>; color: <?php echo $tag['color'] === 'blue' ? 'var(--color-accent)' : 'var(--color-text-primary)'; ?>;">
                                    <?php echo htmlspecialchars($tag['name']); ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <article class="article-content">
                        <?php echo $post_content; ?>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <footer class="relative z-10 border-t" style="border-color: var(--color-border);">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="text-center text-sm" style="color: var(--color-text-secondary);">
                &copy; <?php echo date("Y"); ?> KAI. Tüm Hakları Saklıdır. powered by <a href="https://lumeworks.com" target="_blank" rel="noopener noreferrer" class="font-semibold text-white hover:underline">lumeworks</a>
            </div>
        </div>
    </footer>
</body>
</html>
