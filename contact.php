<?php 
require_once 'core/config.php'; 
$page_title = "İletişim - KAI";

$page_specific_css = ["/main/css/pages/contact.css"];
$page_specific_js = [
    "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js", 
    "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js",
    "/main/js/pages/contact.js"
];

require_once 'core/includes/header.php'; 
?>

<main>
    <section id="contact">
        <div id="particles-background"></div>

        <div class="container">
            <div id="contact-header">
                <h1>Bize Ulaşın</h1>
                <p>Gelişelim, birlikte inşa edelim. Fikirlerinizi ve sorularınızı bekliyoruz.</p>
            </div>

            <div id="contact-container">
                <div class="contact-info-panel">
                    <h2>İletişim Bilgileri</h2>
                    <p>Formu doldurabilir veya doğrudan e-posta gönderebilirsin.</p>
                    
                    <div class="contact-item">
                        <div class="contact-icon-wrapper">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3>E-posta</h3>
                            <a href="mailto:sup@itskai.app">sup@itskai.app</a>
                        </div>
                    </div>
                </div>

                <div class="contact-form-wrapper">
                    <form id="contactForm" method="POST" action="">
                        <div class="form-grid">
                            <div class="form-field">
                                <label for="fullname" class="form-label">Adınız Soyadınız</label>
                                <input type="text" name="fullname" id="fullname" required class="contact-form-input" placeholder="Ad Soyad">
                            </div>
                            <div class="form-field">
                                <label for="email" class="form-label">E-posta Adresiniz</label>
                                <input type="email" name="email" id="email" required class="contact-form-input" placeholder="ornek@eposta.com">
                            </div>
                        </div>
                        
                        <div class="form-field">
                            <label for="subject" class="form-label">Konu</label>
                            <input type="text" name="subject" id="subject" required class="contact-form-input" placeholder="Proje hakkında...">
                        </div>
                        
                        <div class="form-field">
                            <label for="message" class="form-label">Mesajınız</label>
                            <textarea name="message" id="message" required class="contact-form-input" placeholder="Mesajınızı buraya yazın..."></textarea>
                        </div>
                        
                        <button type="submit" class="contact-submit-button">
                            Mesajı Gönder
                        </button>
                        
                        <div id="formMessage" class="form-message"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once 'core/includes/footer.php'; ?>