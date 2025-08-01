document.addEventListener('DOMContentLoaded', function () {
    gsap.registerPlugin(ScrollTrigger);
    
    const previewSection = document.querySelector('#preview');
    if(previewSection) {
        gsap.from(previewSection.querySelector('.relative.mx-auto'), {
            scrollTrigger: {
                trigger: previewSection,
                start: "top 80%",
            },
            opacity: 0,
            y: 50,
            duration: 0.8,
            ease: "power3.out"
        });

        gsap.from(previewSection.querySelectorAll('.preview-card > div'), {
             scrollTrigger: {
                trigger: previewSection,
                start: "top 70%",
            },
            opacity: 0,
            y: 30,
            duration: 0.6,
            stagger: 0.1,
            ease: "power3.out"
        });
    }

    document.querySelectorAll('.interactive-card').forEach(card => {
        gsap.from(card, {
            scrollTrigger: {
                trigger: card,
                start: "top 85%",
                toggleActions: "play none none none"
            },
            opacity: 0,
            y: 40,
            duration: 0.6,
            ease: "power3.out",
        });

        card.addEventListener('mousemove', e => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            card.style.setProperty('--mouse-x', `${x}px`);
            card.style.setProperty('--mouse-y', `${y}px`);
        });
    });

    const teamworkSection = document.querySelector('#teamwork');
    if(teamworkSection) {
        gsap.from(teamworkSection.querySelector('.lg\\:text-left'), {
             scrollTrigger: {
                trigger: teamworkSection,
                start: "top 80%",
            },
            opacity: 0,
            x: -50,
            duration: 0.8,
            ease: "power3.out"
        });
        
        const visualContainer = teamworkSection.querySelector('.hidden.lg\\:flex');
        if (visualContainer) {
            gsap.from(visualContainer, {
                 scrollTrigger: {
                    trigger: teamworkSection,
                    start: "top 80%",
                },
                opacity: 0,
                scale: 0.9,
                duration: 1,
                ease: "power3.out"
            });

            const avatars = visualContainer.querySelectorAll('.floating-avatar');
            avatars.forEach(avatar => {
                gsap.to(avatar, {
                    y: "random(-20, 20)",
                    x: "random(-10, 10)",
                    duration: "random(4, 8)",
                    ease: "sine.inOut",
                    repeat: -1,
                    yoyo: true
                });
            });
        }
    }

    const ctaSection = document.querySelector('#cta');
    if(ctaSection) {
        gsap.from(ctaSection.querySelector('.relative.text-center'), {
            scrollTrigger: {
                trigger: ctaSection,
                start: "top 85%",
            },
            opacity: 0,
            scale: 0.95,
            duration: 0.8,
            ease: "power3.out"
        });
    }
});
