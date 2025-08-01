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
                    &copy; <?php echo date("Y"); ?> KAI. Tüm Hakları Saklıdır.
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
    
    <?php if (isset($page_specific_js)): ?>
        <script src="<?php echo BASE_URL . $page_specific_js; ?>"></script>
    <?php endif; ?>
 
</body>
</html>
