<?php 
require_once 'core/config.php'; 
$page_title = "KAI - Odaklanmanın En Akıllı Yolu";
$page_specific_js = "/main/js/faq.js";
?>
<?php require_once 'core/includes/header.php'; ?>
    <main class="relative overflow-hidden">
        <div class="aurora-background"></div>
        <section class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 text-center pt-24 pb-32 md:pt-32 md:pb-40">
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold tracking-tighter mb-6 bg-clip-text text-transparent bg-gradient-to-b from-white to-gray-400">
                Odaklanmanın En Akıllı Yolu
            </h1>
            <p class="max-w-md md:max-w-2xl mx-auto text-base md:text-xl mb-8" style="color: var(--color-text-secondary);">
                Pomodoro tekniği ve Kanban panolarının gücünü birleştirerek verimliliğinizi zirveye taşıyın. Görevlerinize odaklanın, projelerinizi kolayca yönetin.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="<?php echo BASE_URL; ?>/auth/signup.php" class="w-full sm:w-auto font-semibold px-6 py-3 rounded-md transition-colors flex items-center justify-center" style="background-color: var(--color-button-primary-bg); color: var(--color-button-primary-text);" onmouseover="this.style.backgroundColor='var(--color-button-primary-hover-bg)'" onmouseout="this.style.backgroundColor='var(--color-button-primary-bg)'">
                    Ücretsiz Başla
                </a>
                <a href="#features" class="w-full sm:w-auto font-medium px-6 py-3 rounded-md transition-colors flex items-center justify-center" style="background-color: var(--color-button-secondary-bg); color: var(--color-text-primary);" onmouseover="this.style.backgroundColor='var(--color-button-secondary-hover-bg)'" onmouseout="this.style.backgroundColor='var(--color-button-secondary-bg)'">
                    Daha Fazla Bilgi
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>
        </section>
        <section id="preview" class="relative z-10 pb-20 md:pb-32">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="relative mx-auto max-w-5xl rounded-xl shadow-2xl" style="background-color: var(--color-surface); border: 1px solid var(--color-border);">
                    <div class="flex items-center p-3 border-b" style="border-color: var(--color-border);">
                        <div class="flex space-x-1.5">
                            <div class="w-3 h-3 rounded-full" style="background-color: #f87171;"></div>
                            <div class="w-3 h-3 rounded-full" style="background-color: #fbbd23;"></div>
                            <div class="w-3 h-3 rounded-full" style="background-color: #34d399;"></div>
                        </div>
                    </div>
                    <div class="p-4 md:p-6 grid grid-cols-1 md:grid-cols-4 gap-4 md:gap-6">
                        <div class="md:col-span-3 grid grid-cols-3 gap-4 md:gap-6">
                            <div class="space-y-4">
                                <h3 class="text-sm font-semibold" style="color: var(--color-text-secondary);">Yapılacaklar</h3>
                                <div class="preview-card space-y-3">
                                    <div class="p-3 rounded-lg text-sm" style="background-color: var(--color-surface-light);">Landing Page Tasarımı</div>
                                    <div class="p-3 rounded-lg text-sm" style="background-color: var(--color-surface-light);">API Entegrasyonu</div>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <h3 class="text-sm font-semibold" style="color: var(--color-text-secondary);">Yapılıyor</h3>
                                <div class="preview-card space-y-3">
                                    <div class="p-3 rounded-lg text-sm" style="background-color: var(--color-surface-light);">Veritabanı Şeması</div>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <h3 class="text-sm font-semibold" style="color: var(--color-text-secondary);">Bitti</h3>
                                <div class="preview-card space-y-3">
                                    <div class="p-3 rounded-lg text-sm opacity-60" style="background-color: var(--color-surface-light);">Proje Kurulumu</div>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-span-1 flex flex-col items-center justify-center p-4 rounded-lg" style="background-color: var(--color-surface-subtle);">
                             <h3 class="text-sm font-semibold mb-4" style="color: var(--color-text-secondary);">Odaklanma</h3>
                             <div class="relative w-24 h-24">
                                 <svg class="w-full h-full" viewBox="0 0 100 100">
                                     <circle stroke-width="7" stroke="var(--color-border)" fill="transparent" r="45" cx="50" cy="50" />
                                     <circle id="pomodoro-progress" stroke-width="7" stroke-linecap="round" stroke="var(--color-text-primary)" fill="transparent" r="45" cx="50" cy="50" style="stroke-dasharray: 283; stroke-dashoffset: 70;"/>
                                 </svg>
                                 <div class="absolute inset-0 flex items-center justify-center text-2xl font-bold">24:15</div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="features" class="relative z-10 py-20 md:py-32">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto">
                    <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight mb-4">Her Şey Kontrol Altında</h2>
                    <p class="text-lg" style="color: var(--color-text-secondary);">KAI, üretkenliğinizi artırmak için tasarlanmış güçlü araçlar sunar. Karmaşayı basitleştirin, hedeflerinize odaklanın.</p>
                </div>
                <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
                    <div class="interactive-card">
                        <div class="interactive-card-content">
                            <div class="flex justify-between items-start">
                                <div class="inline-flex items-center justify-center w-12 h-12 rounded-lg" style="background-color: rgba(234, 234, 234, 0.1);">
                                    <svg class="w-6 h-6" style="color: var(--color-text-primary);" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <svg class="arrow-icon w-5 h-5" style="color: var(--color-text-secondary);" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"></path></svg>
                            </div>
                            <h3 class="text-xl font-semibold mt-5 mb-2">Kesintisiz Odaklanma</h3>
                            <p class="text-sm" style="color: var(--color-text-secondary);">Pomodoro tekniği ile dikkatinizi dağıtan unsurları ortadan kaldırın. Çalışma ve mola sürelerinizi kişiselleştirerek derin odaklanma seansları yapın.</p>
                        </div>
                    </div>
                    <div class="interactive-card">
                        <div class="interactive-card-content">
                            <div class="flex justify-between items-start">
                                <div class="inline-flex items-center justify-center w-12 h-12 rounded-lg" style="background-color: rgba(234, 234, 234, 0.1);">
                                    <svg class="w-6 h-6" style="color: var(--color-text-primary);" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"></path></svg>
                                </div>
                                <svg class="arrow-icon w-5 h-5" style="color: var(--color-text-secondary);" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"></path></svg>
                            </div>
                            <h3 class="text-xl font-semibold mt-5 mb-2">Görsel İş Akışı</h3>
                            <p class="text-sm" style="color: var(--color-text-secondary);">Esnek Kanban panoları ile iş akışınızı 'Yapılacak', 'Yapılıyor' ve 'Bitti' olarak düzenleyin. Projelerinizdeki ilerlemeyi bir bakışta görün.</p>
                        </div>
                    </div>
                    <div class="interactive-card">
                        <div class="interactive-card-content">
                            <div class="flex justify-between items-start">
                                <div class="inline-flex items-center justify-center w-12 h-12 rounded-lg" style="background-color: rgba(234, 234, 234, 0.1);">
                                    <svg class="w-6 h-6" style="color: var(--color-text-primary);" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path></svg>
                                </div>
                                <svg class="arrow-icon w-5 h-5" style="color: var(--color-text-secondary);" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"></path></svg>
                            </div>
                            <h3 class="text-xl font-semibold mt-5 mb-2">Verimlilik Analizi</h3>
                            <p class="text-sm" style="color: var(--color-text-secondary);">Tamamladığınız görevleri ve odaklanma sürelerinizi analiz eden raporlarla verimliliğinizi ölçün. Nerede zaman kazandığınızı görün, daha iyi plan yapın.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="teamwork" class="relative z-10 py-20 md:py-32">
             <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="text-center lg:text-left">
                        <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight mb-4">Tek Başına Güçlü, Ekiple Daha Güçlü</h2>
                        <p class="text-lg mb-8" style="color: var(--color-text-secondary);">KAI, bireysel verimliliğinizi artırırken, ekibinizin de aynı hedefe odaklanmasını sağlar. Projeleri birlikte yönetin, iletişimi güçlendirin ve başarıyı paylaşın.</p>
                        <ul class="space-y-6">
                            <li class="flex items-start">
                                <div class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full" style="background-color: rgba(234, 234, 234, 0.1); color: var(--color-text-primary);">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.653-.121-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.653.121-1.283.356-1.857m0 0a3.002 3.002 0 012.288-2.542M12 12a3 3 0 110-6 3 3 0 010 6z"></path></svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold">Paylaşılan Panolar</h4>
                                    <p class="text-sm" style="color: var(--color-text-secondary);">Tüm ekibinizi aynı proje panosunda toplayın. Görevleri atayın, son teslim tarihlerini belirleyin ve ilerlemeyi birlikte takip edin.</p>
                                </div>
                            </li>
                             <li class="flex items-start">
                                <div class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full" style="background-color: rgba(234, 234, 234, 0.1); color: var(--color-text-primary);">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold">Gerçek Zamanlı Güncellemeler</h4>
                                    <p class="text-sm" style="color: var(--color-text-secondary);">Birisi bir kartı taşıdığında veya bir görevi tamamladığında herkes anında görür. Senkronizasyon sorunlarına ve "haberim yoktu" bahanelerine son.</p>
                                </div>
                            </li>
                             <li class="flex items-start">
                                <div class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full" style="background-color: rgba(234, 234, 234, 0.1); color: var(--color-text-primary);">
                                   <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold">Ekip Analitiği</h4>
                                    <p class="text-sm" style="color: var(--color-text-secondary);">Ekibinizin toplam verimliliğini görün. Hangi projelerin daha fazla zaman aldığını analiz ederek kaynaklarınızı daha iyi planlayın.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="hidden lg:flex items-center justify-center">
                        <div class="relative w-full max-w-md h-96">
                             <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-48 h-48 rounded-full" style="background-color: var(--color-accent-glow-1); filter: blur(60px);"></div>
                             <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-40 h-40 rounded-full" style="background-color: var(--color-accent-glow-2); filter: blur(60px); animation: aurora-glow 10s infinite alternate;"></div>
                             <div class="floating-avatar absolute top-10 right-10 w-16 h-16 rounded-full border-2 p-1" style="border-color: var(--color-border);"><img class="w-full h-full rounded-full" src="https://placehold.co/64x64/111111/FFFFFF?text=A" alt="Avatar"></div>
                             <div class="floating-avatar absolute bottom-10 left-10 w-20 h-20 rounded-full border-2 p-1" style="border-color: var(--color-border);"><img class="w-full h-full rounded-full" src="https://placehold.co/80x80/111111/FFFFFF?text=B" alt="Avatar"></div>
                             <div class="floating-avatar absolute top-1/2 right-20 w-12 h-12 rounded-full border-2 p-1" style="border-color: var(--color-border);"><img class="w-full h-full rounded-full" src="https://placehold.co/48x48/111111/FFFFFF?text=C" alt="Avatar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="faq" class="relative z-10 py-20 md:py-32">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto">
                    <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight mb-4">Aklınıza Takılanlar</h2>
                    <p class="text-lg" style="color: var(--color-text-secondary);">En çok merak edilen soruların cevaplarını burada bulabilirsiniz.</p>
                </div>
                <div class="mt-16 max-w-4xl mx-auto space-y-4">
                    <div class="faq-item border rounded-lg" style="border-color: var(--color-border);">
                        <details>
                            <summary class="flex items-center justify-between p-6 cursor-pointer">
                                <span class="font-semibold">KAI'nin ücretsiz bir sürümü var mı?</span>
                                <svg class="w-5 h-5 transform" style="color: var(--color-text-secondary);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </summary>
                            <div class="faq-content p-6 pt-0" style="color: var(--color-text-secondary);">
                                Evet! KAI, temel Pomodoro ve Kanban özelliklerini içeren, bireysel kullanım için tamamen ücretsiz bir plan sunmaktadır. Ekip özellikleri ve gelişmiş analitikler için ücretli planlarımızı inceleyebilirsiniz.
                            </div>
                        </details>
                    </div>
                    <div class="faq-item border rounded-lg" style="border-color: var(--color-border);">
                        <details>
                            <summary class="flex items-center justify-between p-6 cursor-pointer">
                                <span class="font-semibold">Verilerim güvende mi?</span>
                                <svg class="w-5 h-5 transform" style="color: var(--color-text-secondary);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </summary>
                            <div class="faq-content p-6 pt-0" style="color: var(--color-text-secondary);">
                                Kesinlikle. Veri güvenliği en büyük önceliğimizdir. Tüm verileriniz endüstri standardı şifreleme yöntemleriyle korunmakta ve güvenli sunucularda saklanmaktadır. Verilerinizi asla üçüncü partilerle paylaşmayız.
                            </div>
                        </details>
                    </div>
                    <div class="faq-item border rounded-lg" style="border-color: var(--color-border);">
                        <details>
                            <summary class="flex items-center justify-between p-6 cursor-pointer">
                                <span class="font-semibold">Hangi platformlarda kullanabilirim?</span>
                                <svg class="w-5 h-5 transform" style="color: var(--color-text-secondary);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </summary>
                            <div class="faq-content p-6 pt-0" style="color: var(--color-text-secondary);">
                                KAI, modern bir web tarayıcısı olan tüm cihazlarda (masaüstü, tablet, mobil) sorunsuz bir şekilde çalışır. Ayrıca, gelecekte yerel masaüstü ve mobil uygulamalar geliştirmeyi planlıyoruz.
                            </div>
                        </details>
                    </div>
                </div>
            </div>
        </section>
        <section id="cta" class="relative z-10 py-20 md:py-32">
             <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="relative text-center p-12 rounded-2xl overflow-hidden" style="background-color: var(--color-surface);">
                    <div class="absolute inset-0" style="background: radial-gradient(circle at 50% 0%, rgba(59, 130, 246, 0.15), transparent 50%);"></div>
                    <div class="relative">
                        <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight mb-4">Verimliliğinizi Bugün Yükseltin</h2>
                        <p class="max-w-2xl mx-auto text-lg mb-8" style="color: var(--color-text-secondary);">Daha fazla ertelemeyin. KAI'ye ücretsiz katılın ve hedeflerinize ulaşmaya bir adım daha yaklaşın.</p>
                        <a href="<?php echo BASE_URL; ?>/auth/signup.php" class="inline-block font-semibold px-8 py-4 rounded-md transition-transform transform hover:scale-105" style="background-color: var(--color-button-primary-bg); color: var(--color-button-primary-text);">
                            Hemen Ücretsiz Başla
                        </a>
                    </div>
                </div>
             </div>
        </section>
    </main>
<?php require_once 'core/includes/footer.php'; ?>
