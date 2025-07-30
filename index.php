<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAI - Odaklanmanın En Akıllı Yolu</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts: Inter & Lexend -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Lexend:wght@700&display=swap" rel="stylesheet">

    <style>
        /* CSS Değişkenleri (Custom Properties) */
        :root {
            --color-background: #0A0A0A;
            --color-background-translucent: rgba(10, 10, 10, 0.7);
            --color-text-primary: #EAEAEA;
            --color-text-secondary: #A3A3A3; /* approx. text-gray-400 */
            --color-accent: #3B82F6; /* blue-500 */
            --color-accent-glow-1: #583B85;
            --color-accent-glow-2: #2E638E;
            --color-border: rgba(255, 255, 255, 0.1);
        }

        /* Temel stil ve font ayarları */
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--color-background);
            color: var(--color-text-primary);
            overflow-x: hidden; /* Yatay scroll'u engelle */
        }
        
        /* Logo için özel font */
        .font-logo {
            font-family: 'Lexend', sans-serif;
        }

        /* Header'ın scroll sırasında sabit kalması ve arkaplan bulanıklığı */
        header {
            position: sticky;
            top: 0;
            z-index: 50;
            background-color: var(--color-background-translucent);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        
        /* Header altına gradient çizgi eklemek için pseudo-element */
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

        /* Navigasyon linklerinin rengi */
        header nav a {
            color: var(--color-text-secondary);
        }

        /* Dil değiştirme menüsü için animasyon */
        .language-menu {
            transition: opacity 0.2s ease-in-out, transform 0.2s ease-in-out;
        }
        
        /* Mobil menü için animasyon */
        .mobile-nav {
            transition: transform 0.3s ease-in-out;
        }

        /* Hero Section Arka Plan Efekti */
        .aurora-background {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            mix-blend-mode: color-dodge;
            pointer-events: none;
            z-index: 1;
        }

        .aurora-background::before {
            content: '';
            position: absolute;
            width: 800px;
            height: 600px;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background-image: radial-gradient(circle, var(--color-accent-glow-1) 0%, transparent 60%);
            animation: aurora-glow 15s linear infinite alternate;
        }
        
        .aurora-background::after {
            content: '';
            position: absolute;
            width: 600px;
            height: 600px;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background-image: radial-gradient(circle, var(--color-accent-glow-2) 0%, transparent 60%);
            animation: aurora-glow-2 20s linear infinite alternate;
        }

        @keyframes aurora-glow {
            0% { transform: translate(-30%, -40%) scale(1); opacity: 0.4; }
            50% { transform: translate(-60%, -60%) scale(1.2); opacity: 0.6; }
            100% { transform: translate(-30%, -40%) scale(1); opacity: 0.4; }
        }

        @keyframes aurora-glow-2 {
            0% { transform: translate(30%, 40%) scale(1.2); opacity: 0.3; }
            50% { transform: translate(60%, 20%) scale(1); opacity: 0.5; }
            100% { transform: translate(30%, 40%) scale(1.2); opacity: 0.3; }
        }

    </style>
</head>
<body>
    <!-- Header Başlangıcı -->
    <header>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                
                <!-- Sol Taraf: Logo ve Navigasyon -->
                <div class="flex items-center space-x-8">
                    <!-- Logo -->
                    <a href="/" class="font-logo text-2xl font-bold tracking-tighter">KAI</a>
                    
                    <!-- Desktop Navigasyon -->
                    <nav class="hidden md:flex space-x-6">
                        <a href="#features" class="text-sm font-medium hover:text-white transition-colors">Özellikler</a>
                        <a href="#about" class="text-sm font-medium hover:text-white transition-colors">Hakkında</a>
                        <a href="#pricing" class="text-sm font-medium hover:text-white transition-colors">Fiyatlandırma</a>
                    </nav>
                </div>

                <!-- Sağ Taraf: Dil ve CTA -->
                <div class="flex items-center space-x-4">
                    <!-- Dil Değiştirme (Desktop) -->
                    <div class="relative hidden md:block">
                        <button id="lang-menu-button" type="button" class="flex items-center justify-center w-9 h-9 rounded-md hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-900 focus:ring-white transition-colors">
                            <svg style="color: var(--color-text-secondary);" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C13.18 7.061 14.285 7 15 7s1.82.061 2.666.214m-2.666 0V3" />
                            </svg>
                        </button>
                        <!-- Dil Menüsü Dropdown -->
                        <div id="language-menu" class="language-menu origin-top-right absolute right-0 mt-2 w-32 rounded-md shadow-lg bg-[#181818]/95 backdrop-blur-sm ring-1 ring-white/10 focus:outline-none opacity-0 transform scale-95 pointer-events-none" role="menu" aria-orientation="vertical" aria-labelledby="lang-menu-button">
                            <div class="py-1" role="none">
                                <a href="?lang=tr" class="text-gray-300 block px-4 py-2 text-sm hover:bg-white/10" role="menuitem">Türkçe</a>
                                <a href="?lang=en" class="text-gray-300 block px-4 py-2 text-sm hover:bg-white/10" role="menuitem">English</a>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Butonu -->
                    <a href="/app" class="hidden sm:block bg-white/90 text-black text-sm font-semibold px-4 py-2 rounded-md hover:bg-white transition-colors">Uygulamaya Git</a>

                    <!-- Mobil Menü Butonu -->
                    <div class="md:hidden">
                        <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                            <span class="sr-only">Menüyü aç</span>
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobil Navigasyon (Gizli) -->
        <div id="mobile-nav" class="mobile-nav md:hidden absolute top-16 inset-x-0 bg-gray-900/95 p-4 transform -translate-y-[120%] border-b border-white/10">
            <nav class="flex flex-col space-y-4">
                <a href="#features" class="text-base font-medium text-gray-300 hover:text-white transition-colors px-2 py-1 rounded-md">Özellikler</a>
                <a href="#about" class="text-base font-medium text-gray-300 hover:text-white transition-colors px-2 py-1 rounded-md">Hakkında</a>
                <a href="#pricing" class="text-base font-medium text-gray-300 hover:text-white transition-colors px-2 py-1 rounded-md">Fiyatlandırma</a>
                <a href="/app" class="w-full text-center bg-white text-black text-sm font-semibold px-4 py-2.5 rounded-md hover:bg-gray-200 transition-colors mt-4">Uygulamaya Git</a>
            </nav>
        </div>
    </header>
    <!-- Header Bitişi -->

    <!-- Hero Section Başlangıcı -->
    <main class="relative overflow-hidden">
        <!-- Aurora Arka Plan Efekti -->
        <div class="aurora-background"></div>

        <section class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 text-center pt-24 pb-32 md:pt-32 md:pb-40">
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold tracking-tighter mb-6 bg-clip-text text-transparent bg-gradient-to-b from-white to-gray-400">
                Odaklanmanın En Akıllı Yolu
            </h1>
            <p class="max-w-md md:max-w-2xl mx-auto text-base md:text-xl mb-8" style="color: var(--color-text-secondary);">
                Pomodoro tekniği ve Kanban panolarının gücünü birleştirerek verimliliğinizi zirveye taşıyın. Görevlerinize odaklanın, projelerinizi kolayca yönetin.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="/app" class="w-full sm:w-auto bg-white/90 text-black font-semibold px-6 py-3 rounded-md hover:bg-white transition-colors flex items-center justify-center">
                    Ücretsiz Başla
                </a>
                <a href="#features" class="w-full sm:w-auto bg-white/10 text-white font-medium px-6 py-3 rounded-md hover:bg-white/20 transition-colors flex items-center justify-center">
                    Daha Fazla Bilgi
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>
        </section>
    </main>
    <!-- Hero Section Bitişi -->

    <!-- Footer Başlangıcı -->
    <footer class="relative z-10 border-t" style="border-color: var(--color-border);">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-10 text-sm">
                <!-- Sütun 1: Ürün -->
                <div class="space-y-4">
                    <h3 class="font-semibold text-white">Ürün</h3>
                    <ul class="space-y-3">
                        <li><a href="#features" class="hover:text-white transition-colors" style="color: var(--color-text-secondary);">Özellikler</a></li>
                        <li><a href="#pricing" class="hover:text-white transition-colors" style="color: var(--color-text-secondary);">Fiyatlandırma</a></li>
                        <li><a href="/app" class="hover:text-white transition-colors" style="color: var(--color-text-secondary);">Giriş Yap</a></li>
                    </ul>
                </div>
                <!-- Sütun 2: Kaynaklar -->
                <div class="space-y-4">
                    <h3 class="font-semibold text-white">Kaynaklar</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="hover:text-white transition-colors" style="color: var(--color-text-secondary);">Blog</a></li>
                        <li><a href="#" class="hover:text-white transition-colors" style="color: var(--color-text-secondary);">Dokümantasyon</a></li>
                        <li><a href="#" class="hover:text-white transition-colors" style="color: var(--color-text-secondary);">Destek</a></li>
                    </ul>
                </div>
                <!-- Sütun 3: Şirket -->
                <div class="space-y-4">
                    <h3 class="font-semibold text-white">Şirket</h3>
                    <ul class="space-y-3">
                        <li><a href="#about" class="hover:text-white transition-colors" style="color: var(--color-text-secondary);">Hakkımızda</a></li>
                        <li><a href="#" class="hover:text-white transition-colors" style="color: var(--color-text-secondary);">İletişim</a></li>
                    </ul>
                </div>
                <!-- Sütun 4: Yasal -->
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
    <!-- Footer Bitişi -->


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const langMenuButton = document.getElementById('lang-menu-button');
            const languageMenu = document.getElementById('language-menu');
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileNav = document.getElementById('mobile-nav');

            // Dil menüsünü aç/kapat
            if (langMenuButton) {
                langMenuButton.addEventListener('click', function (event) {
                    event.stopPropagation();
                    const isHidden = languageMenu.classList.contains('opacity-0');
                    if (isHidden) {
                        languageMenu.classList.remove('opacity-0', 'scale-95', 'pointer-events-none');
                        languageMenu.classList.add('opacity-100', 'scale-100');
                    } else {
                        languageMenu.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
                        languageMenu.classList.remove('opacity-100', 'scale-100');
                    }
                });
            }

            // Mobil menüyü aç/kapat
            if (mobileMenuButton) {
                mobileMenuButton.addEventListener('click', function () {
                    const isHidden = mobileNav.classList.contains('-translate-y-[120%]');
                    if (isHidden) {
                        mobileNav.classList.remove('-translate-y-[120%]');
                    } else {
                        mobileNav.classList.add('-translate-y-[120%]');
                    }
                });
            }

            // Dışarı tıklandığında menüleri kapat
            window.addEventListener('click', function () {
                if (languageMenu && !languageMenu.classList.contains('opacity-0')) {
                    languageMenu.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
                    languageMenu.classList.remove('opacity-100', 'scale-100');
                }
            });
        });
    </script>

</body>
</html>
