<?php
session_start();

// Verifique se o usuário está logado corretamente e se a sessão contém o 'id' e 'email'
if (!isset($_SESSION['id']) || !isset($_SESSION['email'])) {
    // Se não estiver logado, redirecionar para a página de login
    header('Location: cadastro/login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="inicio.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Advance</title>
</head>

<body>
    <header id="header">
        <div class="interface">
            <div class="logo">
                <a href="#">
                    <img width="100px" height="100px" src="img/logo.png" alt="logo">
                </a>
            </div>
            <nav class="menu desktop">
                <ul>
                    <li><a href="#sobre">Sobre nós</a></li>
                    <li><a href="#services">Especialidades</a></li>
                    <li><a href="#metodologia">Metodologia</a></li>
                    <li><a href="#equipe">Equipe</a></li>
                </ul>
            </nav>
            <div class="advance-contato">
                <?php if (isset($_SESSION['id'])): ?>
                <a href="edit.php?id=<?php echo $_SESSION['id']; ?>" class="btn btn-success">Usuário</a>
                <?php endif; ?>
                <a href="sair.php" class="btn btn-danger me-5">Sair</a>
            </div>
        </div>
    </header>

    <main>
        <section class="inicio" id="inicio">
            <div class="interface">
                <div class="flex">
                    <div class="txt-topo-site">
                        <h1></h1>
                        <p class="txt">Tecnologia e negócios andam lado a lado. Com uma combinação de um design sofisticado, aplicabilidade intuitiva, otimização para resultados e uma ótima equipe, estamos prontos para criar a presença online dos seus negócios.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="services" id="services">
            <div class="container">
                <h2 class="section-title">Nossos Serviços</h2>
                <div class="services-grid">
                    <div class="service-card">
                        <img src="img/consultoria.jfif" alt="Serviço 1" class="service-image">
                        <div class="service-content">
                            <h3 class="service-title">Consultoria e Estratégia de Tecnologia</h3>
                            <p>Desenvolva soluções tecnológicas sob medida para seu negócio com nossa consultoria. Avaliação e estratégias personalizadas por R$500.</p>
                            <button class="btn-services" data-servico="Consultoria e Estratégia de Tecnologia" data-cliente-id="<?php echo $cliente_id; ?>">ADQUIRIR</button>
                        </div>
                    </div>
                    <div class="service-card">
                        <img src="img/dessoft.jfif" alt="Serviço 2" class="service-image">
                        <div class="service-content">
                            <h3 class="service-title">Desenvolvimento de software sob medida</h3>
                            <p>Criamos soluções personalizadas para atender às suas necessidades únicas por: R$800 a R$1500. Utilizamos as linguagens HTML, CSS, PHP, JavaScript, SQL e Java para garantir a melhor tecnologia para o seu projeto.</p>
                            <button class="btn-services" data-servico="Desenvolvimento de Software Sob Medida" data-cliente-id="<?php echo $cliente_id; ?>">ADQUIRIR</button>
                        </div>
                    </div>
                    <div class="service-card">
                        <img src="img/designe.jfif" alt="Serviço 3" class="service-image">
                        <div class="service-content">
                            <h3 class="service-title">Design e Experiência do Usuário (UX/UI)</h3>
                            <p>Criamos interfaces intuitivas e atraentes para proporcionar a melhor experiência ao usuário, atendendo às suas necessidades específicas por: R$400 a R$800.</p>
                            <button class="btn-services" data-servico="Design e Experiência do Usuário (UX/UI)" data-cliente-id="<?php echo $cliente_id; ?>">ADQUIRIR</button>
                        </div>
                    </div>
                    <div class="service-card">
                        <img src="img/banco.jfif" alt="Serviço 4" class="service-image">
                        <div class="service-content">
                            <h3 class="service-title">Desenvolvimento de Sistemas de Dados</h3>
                            <p>Utilizamos SQL, PHP e Java para construir sistemas de dados robustos e eficientes, adaptados às suas necessidades por: R$100 a R$1600.</p>
                            <button class="btn-services" data-servico="Desenvolvimento de Sistemas de Dados" data-cliente-id="<?php echo $cliente_id; ?>">ADQUIRIR</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal para mensagem de agradecimento -->
        <!-- Modal para mensagem de agradecimento -->
    <div id="modalAgradecimento" class="modal">
        <div class="modal-content">
            <h2>Pedido Recebido!</h2>
            <p>Agradecemos pelo seu interesse! Sua solicitação foi recebida com sucesso e nossa equipe já está trabalhando para atendê-lo da melhor forma possível. Em até 4 dias úteis, entraremos em contato por e-mail com todas as informações necessárias.</p>
            <button onclick="fecharModal()">Fechar</button>
        </div>
    </div>
    <section class="sobre" id="sobre">
            <div class="interface">
                <div class="flex">
                    <div class="img-sobre">
                        <img src="img/logo.png" alt="Sobre nós">
                    </div>
                    <div class="txt-sobre">
                        <h2>MUITO PRAZER, <span>SOMOS A ADVANCE</span></h2>
                        <p>A Advance é uma empresa de desenvolvimento de software fundada por seis alunos do Colégio Realengo como parte de um projeto de TCC. Nossa missão é transformar ideias em realidade através de softwares de alta qualidade e eficiência, utilizando as mais modernas tecnologias e metodologias ágeis para atender às necessidades específicas de nossos clientes. Com uma equipe diversa e dedicada, combinamos criatividade, técnica e compromisso para entregar produtos que superem as expectativas. Na Advance, acreditamos no poder da inovação e estamos preparados para liderar a transformação digital. Juntos, podemos construir o amanhã.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="motivos">
            <div class="motivos">
                <h2 class="titulo">A EMPRESA MAIS <span>INOVADORA</span> DO MERCADO</h2>
                <p class="sub">Compreenda as razões pelas quais sua empresa se beneficiará ao contar com nossa equipe de tecnologia.</p>
                <div class="container">
                    <div class="colunas">
                        <div class="col col1">
                            <i class="bi bi-brush"></i>
                            <h3>Design</h3>
                            <p>A equipe de design UX da nossa empresa de software é altamente inovadora, focada em criar experiências digitais intuitivas e envolventes. Combinando criatividade e expertise técnica, entregamos soluções que elevam o padrão da indústria, proporcionando aos usuários uma jornada memorável e eficiente.</p>

                            <i class="bi bi-globe-americas"></i>
                            <h3>Desenvolvimento completo</h3>
                            <p>Nossa empresa de software oferece um desenvolvimento completo de ideias até publicações, garantindo soluções digitais de ponta com eficiência e qualidade excepcionais.</p>
                        </div>
                        <div class="col col2">
                            <i class="bi bi-people"></i>
                            <h3>Time</h3>
                            <p>Na nossa empresa, o time multidisciplinar se destaca pela combinação de habilidades em programação, design, gerenciamento de projetos e qualidade. Essa organização eficaz promove uma abordagem holística na resolução de desafios complexos, impulsionando a inovação e a entrega de soluções de alto nível para os clientes.</p>

                            <i class="bi bi-skip-forward"></i>
                            <h3>Entregas ágeis</h3>
                            <p>Nossa empresa de software adota métodos ágeis para desenvolver produtos com eficiência e flexibilidade, garantindo entregas rápidas e alinhadas às necessidades do cliente.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="metodologia" id="metodologia">
            <div class="desenvolvimento">
                <h2 class="titulo">COMO <span>CONCRETIZAMOS</span> NOSSAS<br>IDEIAS EM <span>CÓDIGOS</span></h2>
                <div class="main">
                    <div class="cardd card1">
                        <h1>1ª ETAPA</h1>
                        <h2>ANÁLISE DE REQUISITOS</h2>
                        <p>Realizamos uma análise de requisitos completa para entender as necessidades dos clientes, identificando requisitos funcionais e não funcionais essenciais. Trabalhamos em colaboração para validar e refinar esses requisitos, assegurando que cada solução desenvolvida atenda às expectativas e objetivos de negócio.</p>
                    </div>
                    <div class="cardd card1">
                        <h1>2ª ETAPA</h1>
                        <h2>DESIGN</h2>
                        <p>Nossa equipe prioriza o design centrado no usuário para criar interfaces intuitivas e atraentes. Com foco na experiência do usuário, nossos designs são meticulosamente elaborados para garantir facilidade de uso e eficiência. Buscamos a harmonia entre estética e funcionalidade em cada detalhe de nossos produtos.</p>
                    </div>
                    <div class="cardd card1">
                        <h1>3ª ETAPA</h1>
                        <h2>DESENVOLVIMENTO</h2>
                        <p>Nesse processo, é a hora da mão na massa, pautado pela excelência técnica e eficiência operacional. Utilizamos metodologias ágeis para garantir entregas rápidas e iterativas, adaptando-nos continuamente às necessidades do cliente. A qualidade e a inovação são pilares fundamentais em cada linha de código que escrevemos.</p>
                    </div>
                </div>
                <div class="dev-2">
                    <div class="cardd card1">
                        <h1>4ª ETAPA</h1>
                        <h2>SPRINT</h2>
                        <p>Na Advance, seguimos metodologias ágeis para garantir entregas contínuas e transparentes. Com isso, você acompanha o progresso de forma clara, faz ajustes rápidos quando necessário e assegura que o projeto final atenda às suas expectativas. Nossa abordagem oferece maior previsibilidade e flexibilidade, permitindo que o desenvolvimento evolua de acordo com as necessidades do seu negócio.</p>
                    </div>
                    <div class="cardd card1">
                        <h1>5ª ETAPA</h1>
                        <h2>IMPLANTAÇÃO</h2>
                        <p>Na etapa de implantação, realizamos a entrega e configuração do software no ambiente de produção. Nossa equipe se dedica a garantir que a transição seja suave e que o sistema esteja completamente funcional. Fornecemos suporte contínuo para assegurar o sucesso do cliente na utilização da solução.</p>
                    </div>
                    <div class="cardd card1">
                        <h1>6ª ETAPA</h1>
                        <h2>SUPORTE</h2>
                        <p>Após a implantação, oferecemos suporte contínuo para garantir o funcionamento perfeito e atender a qualquer necessidade adicional que possa surgir. Estamos comprometidos em garantir o sucesso a longo prazo dos nossos clientes, fornecendo assistência técnica, atualizações e manutenção.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="equipe" id="equipe">
                <h2 class="titulo">NOSSA <span>EQUIPE</span></h2>
                <div class="card-group">
                    <div class="card">
                        <img src="./img/fernandes.png" class="card-img-top" alt="Andrei Sousa">
                        <div class="card-body">
                            <h3 class="card-title">Andrei Sousa</h3>
                            <p class="card-text">Desenvolvedor front-end</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/dede.png" class="card-img-top" alt="Carlos André">
                        <div class="card-body">
                            <h3 class="card-title">Carlos André</h3>
                            <p class="card-text">Escritor técnico</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/gb.png" class="card-img-top" alt="Luís Gabriel">
                        <div class="card-body">
                            <h3 class="card-title">Luís Gabriel</h3>
                            <p class="card-text">Mídias sociais</p>
                        </div>
                    </div>
                </div>
               <br>
                <div class="card-group">
                    <div class="card">
                        <img src="./img/mg.png" class="card-img-top" alt="Miguel Jaber">
                        <div class="card-body">
                            <h3 class="card-title">Miguel Jaber</h3>
                            <p class="card-text">Desenvolvedor Full-Stack</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/lc.png" class="card-img-top" alt="Lucas Laybenith">
                        <div class="card-body">
                            <h3 class="card-title">Lucas Laybenith</h3>
                            <p class="card-text">Analista</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/davi.png" class="card-img-top" alt="David Alves">
                        <div class="card-body">
                            <h3 class="card-title">David Alves</h3>
                            <p class="card-text">Analista</p>
                        </div>
                    </div>
                </div>
            </section><br><br>
            
            <section class="formulario" id="formulario">
                <div class="interface">
                <h2 class="titulo">FALE <span>CONOSCO</span></h2>
                <form name="form_msg" id="form_msg" action="https://api.web3forms.com/submit" method="POST">
                <input type="hidden" name="access_key" value="10db5741-d516-425c-8f0c-f4c1f9fffded">
                <input type="text" name="nome" id="nome" placeholder="Nome" required>
                <input type="email" name="email" id="email" placeholder="E-mail" required>
                <textarea name="mensagem" id="mensagem" placeholder="Mensagem" required></textarea>
                <div class="advance-enviar"><input type="submit" value="ENVIAR"></div>
                </form>
                </div>
            </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Advance. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- Carregamento dos scripts no final do body -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="teste.js"></script>
</body>

</html>