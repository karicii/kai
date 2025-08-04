       document.addEventListener('DOMContentLoaded', function () {
            gsap.registerPlugin(ScrollTrigger);

            const langMenuButton = document.getElementById('lang-menu-button');
            const languageMenu = document.getElementById('language-menu');
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileNav = document.getElementById('mobile-nav');

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

            window.addEventListener('click', function () {
                if (languageMenu && !languageMenu.classList.contains('opacity-0')) {
                    languageMenu.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
                    languageMenu.classList.remove('opacity-100', 'scale-100');
                }
            });
            
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

                gsap.from(faqSection.querySelectorAll('.faq-item'), {
                    scrollTrigger: {
                        trigger: faqSection,
                        start: "top 85%",
                    },
                    opacity: 0,
                    y: 40,
                    duration: 0.6,
                    stagger: 0.2,
                    ease: "power3.out"
                });
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
