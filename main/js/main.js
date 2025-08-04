document.addEventListener('DOMContentLoaded', function () {
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
            mobileNav.classList.toggle('is-open');
        });
    }

    window.addEventListener('click', function () {
        if (languageMenu && !languageMenu.classList.contains('opacity-0')) {
            languageMenu.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
            languageMenu.classList.remove('opacity-100', 'scale-100');
        }
    });
});
