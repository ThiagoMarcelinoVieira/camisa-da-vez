<?php include 'includes/desktop/topoHeader.php'; ?>

<div class="container main-content">
    <div class="row">
            <div class="contato-flex-container">
                <div class="card contato-item">
                    <h2 class="titulo-branco">Contato</h2>
                    <p>Entre em contato conosco através dos nossos canais:</p>
                    <p>Email: <a href="mailto:camisadavez@gmail.com">camisadavez@gmail.com</a></p>
                    <p>WhatsApp: <a href="https://wa.me/5511997861438" target="_blank">+55 (11) 99786-1438</a></p>
                </div>
                <div class="card contato-item">
                    <h2 class="titulo-branco">Fale Conosco</h2>
                    <p>Preencha o formulário abaixo e retornaremos em breve:</p>
                    <form class="contato-form">
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" placeholder="Digite seu nome" required>
                        <label for="email">Email:</label>
                        <input type="email" id="email" placeholder="Digite seu e-mail" required>
                        <label for="mensagem">Mensagem:</label>
                        <textarea id="mensagem" rows="5" placeholder="Escreva sua mensagem"></textarea>
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <div id="cookie-consent-banner" class="cookie-banner hidden">
        <button id="close-cookie-btn" class="close-btn">&times;</button>
        <p class="cookie-text">
            Nós utilizamos cookies para melhorar sua experiência de navegação. Ao continuar, você concorda com a nossa 
            <a href="politicadecookies.php" class="cookie-link">Política de Cookies</a>.
        </p>
        <button id="accept-cookies-btn" class="btn-cookie">Entendi</button>
    </div>

<?php include 'includes/desktop/footer.php'; ?>