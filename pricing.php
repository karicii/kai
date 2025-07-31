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

    <style>
        :root {
            --color-background: #0A0A0A;
            --color-background-translucent: rgba(10, 10, 10, 0.7);
            --color-text-primary: #EAEAEA;
            --color-text-secondary: #A3A3A3;
            --color-accent: #3B82F6;
            --color-accent-glow-1: #583B85;
            --color-accent-glow-2: #2E638E;
            --color-border: rgba(255, 255, 255, 0.1);
            --color-surface: #111111;
            --color-surface-light: #181818;
            --color-surface-subtle: rgba(255,255,255,0.03);
            --color-surface-hover: rgba(255,255,255,0.05);
            --color-button-primary-bg: #FFFFFF;
            --color-button-primary-text: #0A0A0A;
            --color-button-primary-hover-bg: #EAEAEA;
            --color-button-secondary-bg: rgba(255,255,255,0.1);
            --color-button-secondary-hover-bg: rgba(255,255,255,0.2);
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--color-background);
            color: var(--color-text-primary);
            overflow-x: hidden;
        }
        
        .font-logo {
            font-family: 'Lexend', sans-serif;
        }

        header {
            position: sticky;
            top: 0;
            z-index: 50;
            background-color: var(--color-background-translucent);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        
        header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(to right, rgba(59, 130, 246, 0), var(--color-accent), rgba(59, 130, 246, 0));
            opacity: 0.5;
        }

        header nav a {
            color: var(--color-text-secondary);
        }
        
        .faq-item summary svg {
            transition: transform 0.3s ease-in-out;
        }

        .faq-item details[open] summary svg {
            transform: rotate(180deg);
        }

        .faq-item summary::-webkit-details-marker {
          display: none;
        }

        .faq-content {
            overflow: hidden;
        }

    </style>
</head>
<body>
    <header>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center space-x-8">
                    <a href="/" class="font-logo text-2xl font-bold tracking-tighter">KAI</a>
                    <nav class="hidden md:flex space-x-6">
                        <a href="/#features" class="text-sm font-medium hover:text-white transition-colors">Özellikler</a>
                        <a href="/pricing.php" class="text-sm font-medium text-white transition-colors">Fiyatlandırma</a>
                    </nav>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/auth/login.php" class="hidden sm:block text-sm font-semibold px-4 py-2 rounded-md transition-colors" style="background-color: var(--color-button-primary-bg); color: var(--color-button-primary-text);" onmouseover="this.style.backgroundColor='var(--color-button-primary-hover-bg)'" onmouseout="this.style.backgroundColor='var(--color-button-primary-bg)'">Uygulamaya Git</a>
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
                        <a href="/auth/signup.php" class="w-full mt-8 text-center font-semibold py-3 rounded-md transition-colors" style="background-color: var(--color-button-secondary-bg); color: var(--color-text-primary);" onmouseover="this.style.backgroundColor='var(--color-button-secondary-hover-bg)'" onmouseout="this.style.backgroundColor='var(--color-button-secondary-bg)'">Ücretsiz Başla</a>
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
                        <a href="/auth/signup.php?plan=pro" class="w-full mt-8 text-center font-semibold py-3 rounded-md transition-colors" style="background-color: var(--color-accent); color: var(--color-text-primary);">Pro'yu Seç</a>
                    </div>

                    <div class="flex flex-col p-8 rounded-2xl border" style="border-color: var(--color-border); background-color: var(--color-surface);">
                        <h3 class="text-2xl font-semibold">Ekip</h3>
                        <p class="mt-2 text-sm" style="color: var(--color-text-secondary);">Büyük takımlar ve şirketler için.</p>
                        <div class="mt-6">
                            <span class="text-5xl font-extrabold">$30</span>
                            <span class="text-lg font-medium" style="color: var(--color-text-secondary);">/ yıllık</span>
                        </div>
                        <ul class="mt-8 space-y-4 text-sm flex-grow">
                            <li class="flex items-center"><svg class="w-4 h-4 mr-2" style="color: var(--color-text-primary);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Pro'daki Her Şey</li>
                            <li class="flex items-center"><svg class="w-4 h-4 mr-2" style="color: var(--color-text-primary);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Sınırsız Ekip Üyesi</li>
                            <li class="flex items-center"><svg class="w-4 h-4 mr-2" style="color: var(--color-text-primary);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Öncelikli Destek</li>
                            <li class="flex items-center"><svg class="w-4 h-4 mr-2" style="color: var(--color-text-primary);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Gelişmiş Güvenlik Seçenekleri</li>
                        </ul>
                        <a href="/auth/signup.php?plan=team" class="w-full mt-8 text-center font-semibold py-3 rounded-md transition-colors" style="background-color: var(--color-button-secondary-bg); color: var(--color-text-primary);" onmouseover="this.style.backgroundColor='var(--color-button-secondary-hover-bg)'" onmouseout="this.style.backgroundColor='var(--color-button-secondary-bg)'">Bize Ulaşın</a>
                    </div>
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
                                <svg class="w-5 h-5 transform transition-transform" style="color: var(--color-text-secondary);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </summary>
                            <div class="faq-content p-6 pt-0" style="color: var(--color-text-secondary);">
                                Evet, planınızı istediğiniz zaman yükseltebilir veya düşürebilirsiniz. Değişiklikler bir sonraki fatura döneminizde geçerli olur.
                            </div>
                        </details>
                    </div>
                    <div class="faq-item border rounded-lg" style="border-color: var(--color-border);">
                        <details>
                            <summary class="flex items-center justify-between p-6 cursor-pointer">
                                <span class="font-semibold">Hangi ödeme yöntemlerini kabul ediyorsunuz?</span>
                                <svg class="w-5 h-5 transform transition-transform" style="color: var(--color-text-secondary);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </summary>
                            <div class="faq-content p-6 pt-0" style="color: var(--color-text-secondary);">
                                Tüm yaygın kredi kartlarını (Visa, MasterCard, American Express) ve PayPal'ı kabul ediyoruz. Kurumsal planlar için banka transferi seçeneğimiz de mevcuttur.
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
                        <li><a href="/#features" class="hover:text-white transition-colors" style="color: var(--color-text-secondary);">Özellikler</a></li>
                        <li><a href="/pricing.php" class="hover:text-white transition-colors" style="color: var(--color-text-secondary);">Fiyatlandırma</a></li>
                        <li><a href="/auth/login.php" class="hover:text-white transition-colors" style="color: var(--color-text-secondary);">Giriş Yap</a></li>
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            gsap.registerPlugin(ScrollTrigger);
            
            const faqSection = document.querySelector('#faq');
            if(faqSection) {
                const summaries = faqSection.querySelectorAll('.faq-item summary');
                summaries.forEach(summary => {
                    summary.addEventListener('click', (e) => {
                        e.preventDefault();
                        const detail = summary.parentElement;
                        const content = summary.nextElementSibling;
                        
                        if (detail.open) {
                            gsap.to(content, {
                                height: 0,
                                paddingTop: 0,
                                paddingBottom: 0,
                                opacity: 0,
                                duration: 0.4,
                                onComplete: () => {
                                    detail.removeAttribute('open');
                                }
                            });
                        } else {
                            faqSection.querySelectorAll('details[open]').forEach(openDetail => {
                                const openContent = openDetail.querySelector('.faq-content');
                                gsap.to(openContent, {
                                    height: 0,
                                    paddingTop: 0,
                                    paddingBottom: 0,
                                    opacity: 0,
                                    duration: 0.4,
                                    onComplete: () => {
                                        openDetail.removeAttribute('open');
                                    }
                                });
                            });
                            
                            detail.setAttribute('open', '');
                            gsap.fromTo(content, 
                                { height: 0, paddingTop: 0, paddingBottom: 0, opacity: 0 },
                                {
                                    height: 'auto',
                                    paddingTop: '0rem',
                                    paddingBottom: '1.5rem',
                                    opacity: 1,
                                    duration: 0.4
                                }
                            );
                        }
                    });
                });
            }
        });
    </script>
</body>
</html>
