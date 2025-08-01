<?php require_once 'core/config.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAI Fiyatlandırma</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Lexend:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/main/css/base.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/main/css/components/cards.css">
</head>
<body>
    <header>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center space-x-8">
                    <a href="<?php echo BASE_URL; ?>/" class="font-logo text-2xl font-bold tracking-tighter">KAI</a>
                    <nav class="hidden md:flex space-x-6">
                        <a href="<?php echo BASE_URL; ?>/#features" class="text-sm font-medium hover:text-white transition-colors">Özellikler</a>
                        <a href="<?php echo BASE_URL; ?>/pricing.php" class="text-sm font-medium text-white transition-colors">Fiyatlandırma</a>
                    </nav>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="<?php echo BASE_URL; ?>/auth/login.php" class="hidden sm:block text-sm font-semibold px-4 py-2 rounded-md transition-colors" style="background-color: var(--color-button-primary-bg); color: var(--color-button-primary-text);" onmouseover="this.style.backgroundColor='var(--color-button-primary-hover-bg)'" onmouseout="this.style.backgroundColor='var(--color-button-primary-bg)'">Uygulamaya Git</a>
                </div>
            </div>
        </div>
    </header>

    <main class="relative overflow-hidden">
        <section id="pricing" class="relative z-10 py-20 md:py-32">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto">
                    <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight mb-4">Size Uygun Planı Seçin</h1>
                    <p class="text-lg" style="color: var(--color-text-secondary);">Bireysel başlayın veya tüm ekibinizi KAI'ye taşıyın. Şeffaf ve basit fiyatlandırma.</p>
                </div>

                <div class="mt-16 grid grid-cols-1 lg:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <div class="flex flex-col p-8 rounded-2xl border" style="border-color: var(--color-border); background-color: var(--color-surface);">
                        <h3 class="text-2xl font-semibold">Bireysel</h3>
                        <p class="mt-2 text-sm" style="color: var(--color-text-secondary);">Tek başına çalışanlar ve öğrenciler için.</p>
                        <div class="mt-6">
                            <span class="text-5xl font-extrabold">$0</span>
                            <span class="text-lg font-medium" style="color: var(--color-text-secondary);">/ her zaman</span>
                        </div>
                        <ul class="mt-8 space-y-4 text-sm flex-grow">
                            <li class="flex items-center"><svg class="w-4 h-4 mr-2" style="color: var(--color-text-primary);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>3 Proje</li>
                            <li class="flex items-center"><svg class="w-4 h-4 mr-2" style="color: var(--color-text-primary);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Temel Pomodoro Zamanlayıcı</li>
                            <li class="flex items-center"><svg class="w-4 h-4 mr-2" style="color: var(--color-text-primary);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Standart Kanban Panosu</li>
                        </ul>
                        <a href="<?php echo BASE_URL; ?>/auth/signup.php" class="w-full mt-8 text-center font-semibold py-3 rounded-md transition-colors" style="background-color: var(--color-button-secondary-bg); color: var(--color-text-primary);" onmouseover="this.style.backgroundColor='var(--color-button-secondary-hover-bg)'" onmouseout="this.style.backgroundColor='var(--color-button-secondary-bg)'">Ücretsiz Başla</a>
                    </div>
                    
                    <div class="relative flex flex-col p-8 rounded-2xl border-2" style="border-color: var(--color-accent); background-color: var(--color-surface);">
                        <div class="absolute top-0 -translate-y-1/2 left-1/2 -translate-x-1/2">
                            <span class="px-3 py-1 text-xs font-semibold tracking-wider rounded-full" style="background-color: var(--color-accent); color: var(--color-text-primary);">EN POPÜLER</span>
                        </div>
                        <h3 class="text-2xl font-semibold">Pro</h3>
                        <p class="mt-2 text-sm" style="color: var(--color-text-secondary);">Profesyoneller ve küçük ekipler için.</p>
                        <div class="mt-6">
                            <span class="text-5xl font-extrabold">$7</span>
                            <span class="text-lg font-medium" style="color: var(--color-text-secondary);">/ aylık</span>
                        </div>
                        <ul class="mt-8 space-y-4 text-sm flex-grow">
                            <li class="flex items-center"><svg class="w-4 h-4 mr-2" style="color: var(--color-text-primary);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Sınırsız Proje</li>
                            <li class="flex items-center"><svg class="w-4 h-4 mr-2" style="color: var(--color-text-primary);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Gelişmiş Zamanlayıcı Özellikleri</li>
                            <li class="flex items-center"><svg class="w-4 h-4 mr-2" style="color: var(--color-text-primary);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Özelleştirilebilir Panolar</li>
                            <li class="flex items-center"><svg class="w-4 h-4 mr-2" style="color: var(--color-text-primary);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Detaylı Analitikler</li>
                            <li class="flex items-center"><svg class="w-4 h-4 mr-2" style="color: var(--color-text-primary);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>5 Kişiye Kadar Ekip Üyesi</li>
                        </ul>
                        <a href="<?php echo BASE_URL; ?>/auth/signup.php?plan=pro" class="w-full mt-8 text-center font-semibold py-3 rounded-md transition-colors" style="background-color: var(--color-accent); color: var(--color-text-primary);">Pro'yu Seç</a>
                    </div>

                    <div class="flex flex-col p-8 rounded-2xl border" style="border-color: var(--color-border); background-color: var(--color-surface);">
                        <h3 class="text-2xl font-semibold">Ekip</h3>
                        <p class="mt-2 text-sm" style="color: var(--color-text-secondary);">Büyük takımlar ve şirketler için.</p>
                        <div class="mt-6">
                            <span class="text-5xl font-extrabold">$30</span>
                            <span class="text-lg font-medium" style="color: var(--color-text-secondary);">/ kullanıcı / yıllık</span>
                        </div>
                        <ul class="mt-8 space-y-4 text-sm flex-grow">
                            <li class="flex items-center"><svg class="w-4 h-4 mr-2" style="color: var(--color-text-primary);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Pro'daki Her Şey</li>
                            <li class="flex items-center"><svg class="w-4 h-4 mr-2" style="color: var(--color-text-primary);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Sınırsız Ekip Üyesi</li>
                            <li class="flex items-center"><svg class="w-4 h-4 mr-2" style="color: var(--color-text-primary);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Öncelikli Destek</li>
                            <li class="flex items-center"><svg class="w-4 h-4 mr-2" style="color: var(--color-text-primary);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Gelişmiş Güvenlik Seçenekleri</li>
                        </ul>
                        <a href="<?php echo BASE_URL; ?>/auth/signup.php?plan=team" class="w-full mt-8 text-center font-semibold py-3 rounded-md transition-colors" style="background-color: var(--color-button-secondary-bg); color: var(--color-text-primary);" onmouseover="this.style.backgroundColor='var(--color-button-secondary-hover-bg)'" onmouseout="this.style.backgroundColor='var(--color-button-secondary-bg)'">Bize Ulaşın</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="feature-comparison" class="relative z-10 py-20 md:py-32">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto">
                    <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight mb-4">Planları Karşılaştırın</h2>
                    <p class="text-lg" style="color: var(--color-text-secondary);">Tüm özelliklerimizi bir arada görün ve sizin için en doğru planı bulun.</p>
                </div>
                <div class="mt-16 max-w-5xl mx-auto overflow-x-auto">
                    <table class="w-full text-sm text-left">
                        <thead class="border-b" style="border-color: var(--color-border);">
                            <tr>
                                <th class="p-4 w-1/3">Özellikler</th>
                                <th class="p-4 text-center">Bireysel</th>
                                <th class="p-4 text-center">Pro</th>
                                <th class="p-4 text-center">Ekip</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b" style="border-color: var(--color-border);"><td class="p-4 font-semibold" colspan="4">Temel Özellikler</td></tr>
                            <tr class="border-b" style="border-color: var(--color-border);">
                                <td class="p-4" style="color: var(--color-text-secondary);">Projeler</td>
                                <td class="p-4 text-center">3 Proje</td>
                                <td class="p-4 text-center">Sınırsız</td>
                                <td class="p-4 text-center">Sınırsız</td>
                            </tr>
                            <tr class="border-b" style="border-color: var(--color-border);">
                                <td class="p-4" style="color: var(--color-text-secondary);">Pomodoro Zamanlayıcı</td>
                                <td class="p-4 text-center"><svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg></td>
                                <td class="p-4 text-center"><svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg></td>
                                <td class="p-4 text-center"><svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg></td>
                            </tr>
                             <tr class="border-b" style="border-color: var(--color-border);"><td class="p-4 font-semibold" colspan="4">Ekip Özellikleri</td></tr>
                             <tr class="border-b" style="border-color: var(--color-border);">
                                <td class="p-4" style="color: var(--color-text-secondary);">Ekip Üyeleri</td>
                                <td class="p-4 text-center">-</td>
                                <td class="p-4 text-center">5 Üye</td>
                                <td class="p-4 text-center">Sınırsız</td>
                            </tr>
                            <tr class="border-b" style="border-color: var(--color-border);">
                                <td class="p-4" style="color: var(--color-text-secondary);">Paylaşılan Panolar</td>
                                <td class="p-4 text-center">-</td>
                                <td class="p-4 text-center"><svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg></td>
                                <td class="p-4 text-center"><svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section id="faq" class="relative z-10 py-20 md:py-32">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto">
                    <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight mb-4">Aklınıza Takılanlar</h2>
                    <p class="text-lg" style="color: var(--color-text-secondary);">Fiyatlandırma ile ilgili en çok merak edilenler.</p>
                </div>
                <div class="mt-16 max-w-4xl mx-auto space-y-4">
                    <div class="faq-item border rounded-lg" style="border-color: var(--color-border);">
                        <details>
                            <summary class="flex items-center justify-between p-6 cursor-pointer">
                                <span class="font-semibold">Planımı istediğim zaman değiştirebilir miyim?</span>
                                <svg class="w-5 h-5 transform" style="color: var(--color-text-secondary);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </summary>
                            <div class="faq-content p-6 pt-0" style="color: var(--color-text-secondary);">
                                Evet, planınızı istediğiniz zaman yükseltebilir veya düşürebilirsiniz. Değişiklikler bir sonraki fatura döneminizde geçerli olur.
                            </div>
                        </details>
                    </div>
                    <div class="faq-item border rounded-lg" style="border-color: var(--color-border);">
                        <details>
                            <summary class="flex items-center justify-between p-6 cursor-pointer">
                                <span class="font-semibold">Yıllık ödemelerde indirim var mı?</span>
                                <svg class="w-5 h-5 transform" style="color: var(--color-text-secondary);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </summary>
                            <div class="faq-content p-6 pt-0" style="color: var(--color-text-secondary);">
                                Evet! Pro ve Ekip planlarında yıllık ödemeyi tercih ederseniz 2 ay ücretsiz kullanım hakkı kazanırsınız. Bu, yaklaşık %17'lik bir indirime denk gelmektedir.
                            </div>
                        </details>
                    </div>
                    <div class="faq-item border rounded-lg" style="border-color: var(--color-border);">
                        <details>
                            <summary class="flex items-center justify-between p-6 cursor-pointer">
                                <span class="font-semibold">Hangi ödeme yöntemlerini kabul ediyorsunuz?</span>
                                <svg class="w-5 h-5 transform" style="color: var(--color-text-secondary);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </summary>
                            <div class="faq-content p-6 pt-0" style="color: var(--color-text-secondary);">
                                Tüm yaygın kredi kartlarını (Visa, MasterCard, American Express) ve PayPal'ı kabul ediyoruz. Kurumsal planlar için banka transferi seçeneğimiz de mevcuttur.
                            </div>
                        </details>
                    </div>
                    <div class="faq-item border rounded-lg" style="border-color: var(--color-border);">
                        <details>
                            <summary class="flex items-center justify-between p-6 cursor-pointer">
                                <span class="font-semibold">Verilerimi dışa aktarabilir miyim?</span>
                                <svg class="w-5 h-5 transform" style="color: var(--color-text-secondary);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </summary>
                            <div class="faq-content p-6 pt-0" style="color: var(--color-text-secondary);">
                                Evet, Pro ve Ekip planı kullanıcıları tüm proje ve görev verilerini CSV veya JSON formatında dışa aktarabilirler. Verileriniz her zaman size aittir.
                            </div>
                        </details>
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
                        <li><a href="#" class="hover:text-white transition-colors" style="color: var(--color-text-secondary);">Blog</a></li>
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
    <script src="<?php echo BASE_URL; ?>/main/js/faq.js"></script>
 
</body>
</html>
