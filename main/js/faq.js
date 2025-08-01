document.addEventListener('DOMContentLoaded', function () {
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
});
