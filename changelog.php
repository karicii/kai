<?php require_once 'core/config.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAI Değişiklik Günlüğü</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Lexend:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/main/css/base.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/main/css/pages/changelog.css">
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
        <section id="changelog" class="relative z-10 py-20 md:py-32">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto">
                    <div class="text-center mb-16">
                        <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight mb-4">Değişiklik Günlüğü</h1>
                        <p class="text-lg" style="color: var(--color-text-secondary);">KAI'deki en son güncellemeler, iyileştirmeler ve düzeltmeler.</p>
                    </div>

                    <div class="changelog-timeline">
                        <article class="changelog-entry mb-12">
                            <p class="text-sm mb-1" style="color: var(--color-text-secondary);">1 Ağustos 2025</p>
                            <h2 class="text-2xl font-bold mb-3"><a href="#" class="hover:underline">v1.1.0: Ekip Özellikleri Yayında!</a></h2>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="changelog-tag" style="background-color: rgba(59, 130, 246, 0.1); color: var(--color-accent);">Yeni Özellik</span>
                            </div>
                            <p style="color: var(--color-text-secondary);">
                                Artık projelerinizi ekibinizle paylaşabilir, görevleri atayabilir ve ilerlemeyi birlikte takip edebilirsiniz. Gerçek zamanlı güncellemeler ile herkes aynı sayfada kalır.
                            </p>
                        </article>

                        <article class="changelog-entry mb-12">
                            <p class="text-sm mb-1" style="color: var(--color-text-secondary);">15 Temmuz 2025</p>
                            <h2 class="text-2xl font-bold mb-3"><a href="#" class="hover:underline">v1.0.5: Performans İyileştirmeleri</a></h2>
                             <div class="flex flex-wrap gap-2 mb-4">
                                <span class="changelog-tag" style="background-color: rgba(234, 234, 234, 0.1); color: var(--color-text-primary);">İyileştirme</span>
                            </div>
                            <p style="color: var(--color-text-secondary);">
                                Uygulama genelinde sayfa yükleme hızlarını artırdık ve veritabanı sorgularını optimize ettik. Artık KAI her zamankinden daha hızlı.
                            </p>
                        </article>

                        <article class="changelog-entry">
                            <p class="text-sm mb-1" style="color: var(--color-text-secondary);">1 Temmuz 2025</p>
                            <h2 class="text-2xl font-bold mb-3"><a href="#" class="hover:underline">v1.0.0: KAI Yayında!</a></h2>
                             <div class="flex flex-wrap gap-2 mb-4">
                                <span class="changelog-tag" style="background-color: rgba(234, 234, 234, 0.1); color: var(--color-text-primary);">Lansman</span>
                            </div>
                            <p style="color: var(--color-text-secondary);">
                                Pomodoro ve Kanban'ı birleştiren verimlilik uygulamamız KAI'yi sizlere sunmaktan heyecan duyuyoruz.
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="relative z-10 border-t" style="border-color: var(--color-border);">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-10 text-sm">
                <div class="space-y-4">
                    <h3 class="font-semibold text-white">Ürün</h3>
                    <ul class="space-y-3">
                        <li><a href="<?php echo BASE_URL; ?>/#features" class="hover:text-white transition-colors" style="color: var(--color-text-secondary);">Özellikler</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/pricing.php" class="hover:text-white transition-colors" style="color: var(--color-text-secondary);">Fiyatlandırma</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/auth/login.php" class="hover:text-white transition-colors" style="color: var(--color-text-secondary);">Giriş Yap</a></li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <h3 class="font-semibold text-white">Kaynaklar</h3>
                    <ul class="space-y-3">
                        <li><a href="<?php echo BASE_URL; ?>/changelog.php" class="hover:text-white transition-colors" style="color: var(--color-text-secondary);">Yenilikler</a></li>
                        <li><a href="#" class="hover:text-white transition-colors" style="color: var(--color-text-secondary);">Dokümantasyon</a></li>
                        <li><a href="#" class="hover:text-white transition-colors" style="color: var(--color-text-secondary);">Destek</a></li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <h3 class="font-semibold text-white">Şirket</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="hover:text-white transition-colors" style="color: var(--color-text-secondary);">Hakkımızda</a></li>
                        <li><a href="#" class="hover:text-white transition-colors" style="color: var(--color-text-secondary);">İletişim</a></li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <h3 class="font-semibold text-white">Yasal</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="hover:text-white transition-colors" style="color: var(--color-text-secondary);">Gizlilik Politikası</a></li>
                        <li><a href="#" class="hover:text-white transition-colors" style="color: var(--color-text-secondary);">Kullanım Şartları</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t pt-8 mt-8 flex flex-col-reverse sm:flex-row justify-between items-center" style="border-color: var(--color-border);">
                <p class="text-sm mt-4 sm:mt-0" style="color: var(--color-text-secondary);">
                    &copy; 2024 KAI. Tüm Hakları Saklıdır.
                </p>
                <div class="text-sm" style="color: var(--color-text-secondary);">
                    powered by <a href="https://lumeworks.com" target="_blank" rel="noopener noreferrer" class="font-semibold text-white hover:underline">lumeworks</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/main/js/main.js"></script>
    <script src="<?php echo BASE_URL; ?>/main/js/animations.js"></script>
</body>
</html>
