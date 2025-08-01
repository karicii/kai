<?php 
require_once 'core/config.php'; 
$page_title = "KAI Değişiklik Günlüğü";
$page_specific_css = ["/main/css/pages/changelog.css"];
?>
<?php require_once 'core/includes/header.php'; ?>

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
                            <h2 class="text-2xl font-bold mb-3"><a href="<?php echo BASE_URL; ?>/changelog-post.php?id=1" class="hover:underline">v1.1.0: Ekip Özellikleri Yayında!</a></h2>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="changelog-tag" style="background-color: rgba(59, 130, 246, 0.1); color: var(--color-accent);">Yeni Özellik</span>
                            </div>
                            <p style="color: var(--color-text-secondary);">
                                Artık projelerinizi ekibinizle paylaşabilir, görevleri atayabilir ve ilerlemeyi birlikte takip edebilirsiniz. Gerçek zamanlı güncellemeler ile herkes aynı sayfada kalır.
                            </p>
                        </article>

                        <article class="changelog-entry mb-12">
                            <p class="text-sm mb-1" style="color: var(--color-text-secondary);">15 Temmuz 2025</p>
                            <h2 class="text-2xl font-bold mb-3"><a href="<?php echo BASE_URL; ?>/changelog-post.php?id=2" class="hover:underline">v1.0.5: Performans İyileştirmeleri</a></h2>
                             <div class="flex flex-wrap gap-2 mb-4">
                                <span class="changelog-tag" style="background-color: rgba(234, 234, 234, 0.1); color: var(--color-text-primary);">İyileştirme</span>
                            </div>
                            <p style="color: var(--color-text-secondary);">
                                Uygulama genelinde sayfa yükleme hızlarını artırdık ve veritabanı sorgularını optimize ettik. Artık KAI her zamankinden daha hızlı.
                            </p>
                        </article>

                        <article class="changelog-entry">
                            <p class="text-sm mb-1" style="color: var(--color-text-secondary);">1 Temmuz 2025</p>
                            <h2 class="text-2xl font-bold mb-3"><a href="<?php echo BASE_URL; ?>/changelog-post.php?id=3" class="hover:underline">v1.0.0: KAI Yayında!</a></h2>
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

<?php require_once 'core/includes/footer.php'; ?>
