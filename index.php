<?php include 'includes/header.php'; ?>

    <div class="card" id="banner">
        <div class="banner-container">
            <div class="banner-slide active">
                <img src="img/banner1.jpg" alt="Banner 1" class="banner-img">
            </div>
            <div class="banner-slide">
                <img src="img/banner2.jpg" alt="Banner 2" class="banner-img">
            </div>
            <div class="banner-slide">
                <img src="img/banner3.jpg" alt="Banner 3" class="banner-img">
            </div>
            <button class="banner-control prev" aria-label="Anterior">&#10094;</button>
            <button class="banner-control next" aria-label="Próximo">&#10095;</button>
            <div class="banner-indicators">
                <span class="indicator active"></span>
                <span class="indicator"></span>
                <span class="indicator"></span>
            </div>
        </div>
    </div>
    <div class="container-fluid main-content">
        <div class="row">

            <div class="col-lg-9 col-md-8">

                <div class="card" id="home-img">
                    <img src="img/campo-fundo.jpg" alt="Campo de Futebol" class="img-bg-home">
                    <div class="card-content-home">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h1>Bem-vindo ao Camisa da Vez!</h1>
                                    <p id="subtitulo">Todo dia uma camisa, todo dia uma história!</p>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="destaque">
                            <div class="col-md-6">
                                <div class="card">
                                    <img src="img/10neymar.jpg" alt="Camisa Neymar Brasil" class="img-fluid rounded shadow-sm" id="neymar">
                                </div>
                            </div>
                            <div class="col-md-6" id="camisadehoje">
                                <div class="card">
                                    <h3 id="tituloDestaque">Camisa de Hoje</h3>
                                    <p class="txtDestaque"><strong>Dia:</strong> 10</p>
                                    <p class="txtDestaque"><strong>Jogador:</strong> Neymar Jr.</p>
                                    <p class="txtDestaque"><strong>Seleção:</strong> Brasil</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <section id="ultimas-camisas">
                <div class="card" id="camisas-ultimos-dias">
                    <img src="img/campo-fundo.jpg" alt="Campo de Futebol" class="img-bg-ultimos">
                    <div class="card-content-ultimos">
                        <div class="card">
                            <h2 class="titulo-camisas">Camisas dos últimos 15 dias</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card camisa-dia-card">
                                    <img src="img/0exemplo.jpg" alt="Camisa Ibrahimović Dia 15" class="img-fluid rounded mb-2">
                                    <h4 class="camisa-dia-titulo">Dia 15</h4>
                                    <p class="camisa-dia-jogador">Zlatan Ibrahimović</p>
                                    <p class="camisa-dia-selecao">Time: Milan</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card camisa-dia-card">
                                    <img src="img/0exemplo.jpg" alt="Camisa Henry Dia 14" class="img-fluid rounded mb-2">
                                    <h4 class="camisa-dia-titulo">Dia 14</h4>
                                    <p class="camisa-dia-jogador">Thierry Henry</p>
                                    <p class="camisa-dia-selecao">Time: Arsenal</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card camisa-dia-card">
                                    <img src="img/0exemplo.jpg" alt="Camisa Müller Dia 13" class="img-fluid rounded mb-2">
                                    <h4 class="camisa-dia-titulo">Dia 13</h4>
                                    <p class="camisa-dia-jogador">Thomas Müller</p>
                                    <p class="camisa-dia-selecao">Time: Bayern de Munique</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card camisa-dia-card">
                                    <img src="img/0exemplo.jpg" alt="Camisa Marcelo Dia 12" class="img-fluid rounded mb-2">
                                    <h4 class="camisa-dia-titulo">Dia 12</h4>
                                    <p class="camisa-dia-jogador">Marcelo</p>
                                    <p class="camisa-dia-selecao">Time: Real Madrid</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card camisa-dia-card">
                                    <img src="img/0exemplo.jpg" alt="Camisa Romário Dia 11" class="img-fluid rounded mb-2">
                                    <h4 class="camisa-dia-titulo">Dia 11</h4>
                                    <p class="camisa-dia-jogador">Romário</p>
                                    <p class="camisa-dia-selecao">Time: Barcelona</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card camisa-dia-card">
                                    <img src="img/10neymar.jpg" alt="Camisa Neymar Jr. Dia 10" class="img-fluid rounded mb-2">
                                    <h4 class="camisa-dia-titulo">Dia 10</h4>
                                    <p class="camisa-dia-jogador">Neymar Jr.</p>
                                    <p class="camisa-dia-selecao">Seleção: Brasil</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card camisa-dia-card">
                                    <img src="img/9ronaldo.jpg" alt="Camisa Ronaldo Dia 9" class="img-fluid rounded mb-2">
                                    <h4 class="camisa-dia-titulo">Dia 9</h4>
                                    <p class="camisa-dia-jogador">Ronaldo</p>
                                    <p class="camisa-dia-selecao">Seleção: Brasil</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card camisa-dia-card">
                                    <img src="img/8kaka.jpg" alt="Camisa Kaká Dia 8" class="img-fluid rounded mb-2">
                                    <h4 class="camisa-dia-titulo">Dia 8</h4>
                                    <p class="camisa-dia-jogador">Kaká</p>
                                    <p class="camisa-dia-selecao">Time: Milan</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card camisa-dia-card">
                                    <img src="img/0exemplo.jpg" alt="Camisa Raúl Dia 7" class="img-fluid rounded mb-2">
                                    <h4 class="camisa-dia-titulo">Dia 7</h4>
                                    <p class="camisa-dia-jogador">Raúl González</p>
                                    <p class="camisa-dia-selecao">Time: Real Madrid</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card camisa-dia-card">
                                    <img src="img/0exemplo.jpg" alt="Camisa Xavi Dia 6" class="img-fluid rounded mb-2">
                                    <h4 class="camisa-dia-titulo">Dia 6</h4>
                                    <p class="camisa-dia-jogador">Xavi</p>
                                    <p class="camisa-dia-selecao">Time: Barcelona</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card camisa-dia-card">
                                    <img src="img/0exemplo.jpg" alt="Camisa Busquets Dia 5" class="img-fluid rounded mb-2">
                                    <h4 class="camisa-dia-titulo">Dia 5</h4>
                                    <p class="camisa-dia-jogador">Sergio Busquets</p>
                                    <p class="camisa-dia-selecao">Time: Barcelona</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card camisa-dia-card">
                                    <img src="img/0exemplo.jpg" alt="Camisa Sergio Ramos Dia 4" class="img-fluid rounded mb-2">
                                    <h4 class="camisa-dia-titulo">Dia 4</h4>
                                    <p class="camisa-dia-jogador">Sergio Ramos</p>
                                    <p class="camisa-dia-selecao">Time: Real Madrid</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card camisa-dia-card">
                                    <img src="img/0exemplo.jpg" alt="Camisa Paolo Maldini Dia 3" class="img-fluid rounded mb-2">
                                    <h4 class="camisa-dia-titulo">Dia 3</h4>
                                    <p class="camisa-dia-jogador">Paolo Maldini</p>
                                    <p class="camisa-dia-selecao">Time: Milan</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card camisa-dia-card">
                                    <img src="img/0exemplo.jpg" alt="Camisa Cafu Dia 2" class="img-fluid rounded mb-2">
                                    <h4 class="camisa-dia-titulo">Dia 2</h4>
                                    <p class="camisa-dia-jogador">Cafú</p>
                                    <p class="camisa-dia-selecao">Time: Milan</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card camisa-dia-card">
                                    <img src="img/0exemplo.jpg" alt="Camisa Oliver Kahn Dia 1" class="img-fluid rounded mb-2">
                                    <h4 class="camisa-dia-titulo">Dia 1</h4>
                                    <p class="camisa-dia-jogador">Oliver Kahn</p>
                                    <p class="camisa-dia-selecao">Time: Bayern de Munique</p>
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
                </section>
                </div>
            <?php include 'includes/sidebar.php'; ?>
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
    </body>
</html>