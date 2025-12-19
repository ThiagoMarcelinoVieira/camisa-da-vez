// =========================================================
// SCRIPT.JS - LÓGICA DE INTERAÇÃO DO SITE
// =========================================================

// =========================================================
// FUNÇÕES GLOBAIS
// As funções abaixo podem ser chamadas de qualquer lugar do HTML
// =========================================================

// INÍCIO: LÓGICA DO MODAL DE RODAPÉ
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
// FIM: LÓGICA DO MODAL DE RODAPÉ

    // INÍCIO: LÓGICA DO TEMA (CLARO/ESCURO)
    const themeToggle = document.getElementById('theme-toggle');
    const body = document.body;
    const logo = document.getElementById('logo');
    
    // ATENÇÃO: Verifique se themeToggle existe antes de usar querySelector
    if (themeToggle) {
        const icon = themeToggle.querySelector('img');

        // Restante da sua lógica do tema
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



    // INÍCIO: LÓGICA DA BARRA DE NAVEGAÇÃO
    let lastScrollTop = 0;
    const navbar = document.querySelector('.navbar-custom');

    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop && scrollTop > 100) {
            navbar.classList.add('navbar-hide');
        } else {
            navbar.classList.remove('navbar-hide');
        }
        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    });
    // FIM: LÓGICA DA BARRA DE NAVEGAÇÃO


    // INÍCIO: LÓGICA DO CARROSSEL DE BANNERS
    let slideIndex = 0;
    const slides = document.querySelectorAll('.banner-slide');
    const indicators = document.querySelectorAll('.banner-indicators .indicator');
    const prevBtn = document.querySelector('.banner-control.prev');
    const nextBtn = document.querySelector('.banner-control.next');

    if (slides.length > 0) {
        // Função para mostrar o slide
        function showSlide(n) {
            slides.forEach(slide => slide.classList.remove('active'));
            indicators.forEach(indicator => indicator.classList.remove('active'));
            
            slides[n].classList.add('active');
            indicators[n].classList.add('active');
        }

        // Adiciona eventos de clique nos botões
        prevBtn.addEventListener('click', () => {
            slideIndex = (slideIndex - 1 + slides.length) % slides.length;
            showSlide(slideIndex);
        });

        nextBtn.addEventListener('click', () => {
            slideIndex = (slideIndex + 1) % slides.length;
            showSlide(slideIndex);
        });

        // Adiciona eventos de clique nos indicadores
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                slideIndex = index;
                showSlide(slideIndex);
            });
        });

        // Auto-slide
        setInterval(() => {
            slideIndex = (slideIndex + 1) % slides.length;
            showSlide(slideIndex);
        }, 5000); // Muda a cada 5 segundos
    }
    // FIM: LÓGICA DO CARROSSEL DE BANNERS

// INÍCIO: LÓGICA DO BANNER DE CONSENTIMENTO DE COOKIES

document.addEventListener('DOMContentLoaded', () => {
    const cookieBanner = document.getElementById('cookie-consent-banner');
    const acceptCookiesBtn = document.getElementById('accept-cookies-btn');
    const closeCookieBtn = document.getElementById('close-cookie-btn'); // Botão de fechar
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

    // Adiciona o evento de clique para o novo botão de fechar
    closeCookieBtn.addEventListener('click', () => {
        cookieBanner.classList.add('hidden');
        // Não salva a preferência, o banner reaparecerá na próxima visita
    });
});

// Verifica o localStorage e esconde o banner imediatamente
// Isso previne que ele apareça, mesmo por um milissegundo
if (localStorage.getItem('cookiesAccepted') === 'true') {
    const cookieBanner = document.getElementById('cookie-consent-banner');
    if (cookieBanner) {
        cookieBanner.classList.add('hidden');
    }
}

// O restante do seu código JavaScript, a partir daqui...
document.addEventListener('DOMContentLoaded', function() {
    // ...
});