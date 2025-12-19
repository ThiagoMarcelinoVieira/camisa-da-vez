// LÓGICA DO MODAL DE RODAPÉ
function showFooterModal(id) {
    document.getElementById(id).style.display = 'block';
    document.body.style.overflow = 'hidden';
}

function closeFooterModal(id) {
    document.getElementById(id).style.display = 'none';
    document.body.style.overflow = '';
}

window.onclick = function(event) {
    document.querySelectorAll('.footer-modal').forEach(function(modal){
        if (event.target === modal) {
            modal.style.display = 'none';
            document.body.style.overflow = '';
        }
    });
};

    // LÓGICA DO TEMA (CLARO/ESCURO)
    const themeToggle = document.getElementById('theme-toggle');
    const body = document.body;
    const logo = document.getElementById('logo');

    if (themeToggle) {
        const icon = themeToggle.querySelector('img');

        const currentTheme = localStorage.getItem('theme');
        if (currentTheme === 'dark') {
            body.classList.add('dark-mode');
            logo.src = 'img/logo-dark.png';
            icon.src = 'img/icon-light.png';
        } else {
            body.classList.add('light-mode');
            logo.src = 'img/logo-light.png';
            icon.src = 'img/icon-dark.png';
        }

        themeToggle.addEventListener('click', () => {
            if (body.classList.contains('light-mode')) {
                body.classList.remove('light-mode');
                body.classList.add('dark-mode');
                localStorage.setItem('theme', 'dark');
                logo.src = 'img/logo-dark.png';
                icon.src = 'img/icon-light.png';
            } else {
                body.classList.remove('dark-mode');
                body.classList.add('light-mode');
                localStorage.setItem('theme', 'light');
                logo.src = 'img/logo-light.png';
                icon.src = 'img/icon-dark.png';
            }
        });
    }

    // LÓGICA DA BARRA DE NAVEGAÇÃO
    document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const navbarMenu = document.querySelector('.navbar-menu');

    function toggleMenu() {
        navbarMenu.classList.toggle('open');
        menuToggle.classList.toggle('active');
    }

    menuToggle.addEventListener('click', toggleMenu);

    const navLinks = document.querySelectorAll('.navbar-link');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (navbarMenu.classList.contains('open')) {
                toggleMenu();
            }
        });
    });
});

    // LÓGICA DO CARROSSEL DE BANNERS
    let slideIndex = 0;
    const slides = document.querySelectorAll('.banner-slide');
    const indicators = document.querySelectorAll('.banner-indicators .indicator');
    const prevBtn = document.querySelector('.banner-control.prev');
    const nextBtn = document.querySelector('.banner-control.next');

    if (slides.length > 0) {
        function showSlide(n) {
            slides.forEach(slide => slide.classList.remove('active'));
            indicators.forEach(indicator => indicator.classList.remove('active'));
            
            slides[n].classList.add('active');
            indicators[n].classList.add('active');
        }

        prevBtn.addEventListener('click', () => {
            slideIndex = (slideIndex - 1 + slides.length) % slides.length;
            showSlide(slideIndex);
        });

        nextBtn.addEventListener('click', () => {
            slideIndex = (slideIndex + 1) % slides.length;
            showSlide(slideIndex);
        });

        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                slideIndex = index;
                showSlide(slideIndex);
            });
        });

        setInterval(() => {
            slideIndex = (slideIndex + 1) % slides.length;
            showSlide(slideIndex);
        }, 5000);
    }

// LÓGICA DO BANNER DE CONSENTIMENTO DE COOKIES
document.addEventListener('DOMContentLoaded', () => {
    const cookieBanner = document.getElementById('cookie-consent-banner');
    const acceptCookiesBtn = document.getElementById('accept-cookies-btn');
    const closeCookieBtn = document.getElementById('close-cookie-btn');
    const hasAcceptedCookies = localStorage.getItem('cookiesAccepted');

    if (hasAcceptedCookies) {
        cookieBanner.classList.add('hidden');
    } else {
        cookieBanner.classList.remove('hidden');
    }

    acceptCookiesBtn.addEventListener('click', () => {
        cookieBanner.classList.add('hidden');
        localStorage.setItem('cookiesAccepted', 'true');
    });

    closeCookieBtn.addEventListener('click', () => {
        cookieBanner.classList.add('hidden');
    });
});

if (localStorage.getItem('cookiesAccepted') === 'true') {
    const cookieBanner = document.getElementById('cookie-consent-banner');
    if (cookieBanner) {
        cookieBanner.classList.add('hidden');
    }
}

document.addEventListener('DOMContentLoaded', function() {
});