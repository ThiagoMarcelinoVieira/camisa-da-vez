<?php 
    // 1. INCLUIR CONEXÃO COM O BANCO DE DADOS
    include 'conexao.php'; // Inclui o objeto $pdo

    // 2. LÓGICA DE BUSCA DA CAMISA DE HOJE (Pela lógica de repetição anual: Dia do Mês = Número da Camisa)
    
    // Pega o dia do mês atual (Ex: se hoje é 2025-12-14, pega o número 14)
    $dia_atual = date('j'); 

    // SQL que busca a camisa com o número do dia correspondente
    $sql_hoje = "SELECT * FROM camisas WHERE dia = :dia_atual LIMIT 1";
    $stmt_hoje = $pdo->prepare($sql_hoje);
    $stmt_hoje->bindParam(':dia_atual', $dia_atual, PDO::PARAM_INT);
    $stmt_hoje->execute();
    $camisa_hoje = $stmt_hoje->fetch(); 
    
    // Se não encontrou a camisa de hoje, usa dados padrão/genéricos
    if (!$camisa_hoje) {
        $camisa_hoje = [
            'dia' => $dia_atual,
            'jogador' => 'Camisa de Hoje não Cadastrada',
            'selecao_time' => 'Aguarde a atualização!',
            'imagem_arquivo' => '0exemplo.jpg' 
        ];
    } else {
        // Se encontrou a camisa do dia, INSERE/ATUALIZA o registro no histórico
        // Isso é crucial para que as "Últimas 20 Camisas" funcionem
        $id_camisa_hoje = $camisa_hoje['id'];
        
        // 2A. Insere o registro no histórico (se não existir, pois data_real é UNIQUE)
        $sql_insere_historico = "INSERT IGNORE INTO historico_exibicao (id_camisa, data_real) VALUES (:id_camisa, CURDATE())";
        $stmt_insere = $pdo->prepare($sql_insere_historico);
        $stmt_insere->bindParam(':id_camisa', $id_camisa_hoje, PDO::PARAM_INT);
        $stmt_insere->execute();
    }
    
    // 3. LÓGICA DE BUSCA DAS ÚLTIMAS 20 CAMISAS (Usando JOIN com a tabela de histórico)
    // JOIN: Junta dados de duas tabelas (camisas e historico_exibicao)
    // ORDER BY data_real DESC: Ordena pela data que realmente foi exibida (mais recente primeiro)
    $sql_ultimas = "SELECT h.data_real, c.dia, c.jogador, c.selecao_time, c.imagem_arquivo 
                    FROM historico_exibicao h
                    INNER JOIN camisas c ON h.id_camisa = c.id
                    ORDER BY h.data_real DESC LIMIT 20";
    $stmt_ultimas = $pdo->query($sql_ultimas);
    $ultimas_camisas = $stmt_ultimas->fetchAll();

    include 'includes/desktop/topoHeader.php';
    include 'includes/desktop/banner.php';
?>

    <div class="container-fluid main-content">
        <div class="">

                <div class="col-md-12 card" id="home-img">
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
                                <div class="card camisa-hoje">
                                    <img src="img/<?php echo $camisa_hoje['imagem_arquivo']; ?>" alt="Camisa <?php echo $camisa_hoje['jogador']; ?> <?php echo $camisa_hoje['selecao_time']; ?>" class="img-fluid rounded shadow-sm" id="neymar">
                                </div>
                            </div>
                            <div class="col-md-6 camisa-hoje">
                                <div class="card">
                                    <h3 id="tituloDestaque">Camisa de Hoje</h3>
                                    <p class="txtDestaque"><strong>Dia:</strong> <?php echo $camisa_hoje['dia']; ?></p>
                                    <p class="txtDestaque"><strong>Jogador:</strong> <?php echo $camisa_hoje['jogador']; ?></p>
                                    <p class="txtDestaque"><strong>Time:</strong> <?php echo $camisa_hoje['selecao_time']; ?></p>
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
                            <h2 class="titulo-camisas">Camisas dos últimos 20 dias</h2>
                        </div>
                        <div class="row">
                            
                            <?php foreach ($ultimas_camisas as $camisa): ?>
                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="card camisa-dia-card">
                                    <img src="img/<?php echo $camisa['imagem_arquivo']; ?>" alt="Camisa <?php echo $camisa['jogador']; ?> Dia <?php echo $camisa['dia']; ?>" class="img-fluid rounded mb-2">
                                    <h4 class="camisa-dia-titulo">Dia <?php echo $camisa['dia']; ?></h4>
                                    <p class="camisa-dia-jogador"><?php echo $camisa['jogador']; ?></p>
                                    <p class="camisa-dia-selecao">Time: <?php echo $camisa['selecao_time']; ?></p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            </div>
                    </div>
                </div>
                </section>
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
    </body>
</html>