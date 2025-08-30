<?php include 'includes/header.php'; ?>

<div class="container main-content">
    <div class="row">
        <div class="col-md-8">
            <div class="contato-flex-container">
                <div class="card contato-item">
                    <h2 class="titulo-branco">Contato</h2>
                    <p>Entre em contato conosco através dos nossos canais:</p>
                    <p>Email: <a href="mailto:contatocamisa@gmail.com">contatocamisa@gmail.com</a></p>
                    <p>WhatsApp: <a href="https://wa.me/5511000000000" target="_blank">+55 (11) 00000-0000</a></p>
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

        <div class="col-md-4">
            <?php include 'includes/sidebar.php'; ?>
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

<?php include 'includes/footer.php'; ?>