document.addEventListener('DOMContentLoaded', function() {
    gsap.registerPlugin(ScrollTrigger);

    // Genel animasyonlar için bir timeline oluşturmak daha yönetilebilir.
    const tl = gsap.timeline({
        defaults: {
            duration: 0.8,
            ease: 'power3.out'
        }
    });

    tl.from("#contact-header", { opacity: 0, y: 40 })
      .from("#contact-container", { opacity: 0, y: 40 }, "-=0.6")
      .from(".contact-info-panel", { opacity: 0, x: -30 }, "-=0.6")
      .from(".contact-form-wrapper", { opacity: 0, x: 30 }, "<");


    // Form gönderme mantığı
    const contactForm = document.getElementById('contactForm');
    if(contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const submitButton = this.querySelector('.contact-submit-button');
            const messageDiv = document.getElementById('formMessage');

            submitButton.classList.add('loading');
            submitButton.textContent = 'Gönderiliyor...';
            submitButton.disabled = true;

            // Gerçek bir backend çağrısı burada yapılmalı.
            // Bu bir simülasyon:
            setTimeout(() => {
                submitButton.classList.remove('loading');
                submitButton.textContent = 'Mesajı Gönder';
                submitButton.disabled = false;
                
                // Başarı durumunu göster
                messageDiv.textContent = 'Mesajınız başarıyla gönderildi! En kısa sürede size dönüş yapacağız.';
                messageDiv.className = 'form-message success show';
                
                this.reset(); // Formu temizle

                setTimeout(() => {
                    messageDiv.classList.remove('show');
                }, 5000);

            }, 2000);
        });
    }

    // Arka plan parçacık animasyonu
    function createParticles() {
        const container = document.getElementById('particles-background');
        if (!container) return;
        
        const particleCount = 40;
        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            
            gsap.set(particle, {
                x: gsap.utils.random(0, container.offsetWidth),
                y: gsap.utils.random(0, container.offsetHeight),
                scale: gsap.utils.random(0.5, 1.2)
            });

            container.appendChild(particle);

            gsap.to(particle, {
                x: `+=${gsap.utils.random(-100, 100)}`,
                y: `+=${gsap.utils.random(-100, 100)}`,
                opacity: gsap.utils.random(0.1, 0.5),
                duration: gsap.utils.random(10, 20),
                repeat: -1,
                yoyo: true,
                ease: 'sine.inOut'
            });
        }
    }
    createParticles();
});