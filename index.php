<?php
include "conexao.php";    
    $nome=filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
    $mensagem=filter_input(INPUT_POST, "mensagem", FILTER_SANITIZE_STRING);
    
    $result_usuario="INSERT INTO feedback (nome, mensagem) VALUES ('$nome', '$mensagem')";
    $SQL=mysqli_query($conn, $result_usuario);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Advance</title>

</head>

<body>
    <header id="header">
        <div class="interface">
            <div class="logo">
                <a href="#">
                    <img width="100px" height="100px" src="imagens/logo.1.png" alt="logo">
                </a>
            </div>
            <nav class="menu desktop">
                <ul>
                    <li><a href="#inicio">Ínicio</a></li>
                    <li><a href="#sobre">Sobre nós</a></li>
                    <li><a href="#especialidades">Especialidades</a></li>
                    <li><a href="#metodologia">Metodologia</a></li>
                    
                </ul>
            </nav>
            <div class="advance-contato">
                <li><a href="#formulario"></a></li>
                <a href="#formulario">
                    <button>contato</button>
                </a>
            </div>
        </div>
    </header>
    <main>
        <section class="inicio" id="inicio">
            <div class="interface">
                <div class="flex">
                    <div class="txt-topo-site">
                        <h1>TRANSFORMANDO SEU NEGÓCIO EM SITES DIGITAIS<span>.</span></h1>
                        <p class="txt">Tecnologia e negócios andam lado a lado. Com uma combinação de um design
                            sofisticado, aplicabilidade intuitiva, otimização para resultados e uma ótima equipe, estamos
                            prontos para criar a presença online dos seus negócios</p>
                        <div class="advance-contato">
                            <a href="#">
                                <button>Entre em contato</button>
                            </a>
                        </div>
                    </div>
                    <div class="img-topo-site">
                        <img width="450px" height="450px;" src="imagens/logo.1.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="especialidades" id="especialidades">
            <div class="interface">
                <h2 class="titulo">NOSSAS <span>ESPECIALIDADES</span></h2>
                <div class="flex">
                    <div class="especialidades-box">
                        <i class="bi bi-code-slash"></i>
                        <h3>desenvolovimeto de software
                            web/desktop
                        </h3>
                      
                    </div>
                    <div class="especialidades-box">
                        <i class="bi bi-cart"></i>
                        <h3>Loja online E-commerce</h3>
                       
                    </div>
                    <div class="especialidades-box">
                        <i class="bi bi-houses-fill"></i>
                        <h3>Serviço de hospedagem</h3>
                    </div>
                    <div class="especialidades-box">
                        <i class="bi bi-wrench"></i>
                        <h3>Consultoria de TI</h3>
                    </div>
                    
                </div>
            </div>
        </section>
        <section class="sobre" id="sobre" >
            <div class="interface">
                <div class="flex">
                    <div class="img-sobre">
                        <img src="imagens/logo.1.png">
                    </div>

                    <div class="txt-sobre">
                        <h2>MUITO PRAZER, <span>SOMOS A ADVANCE</span></h2>
                        <p>Nossa empresa de desenvolvimento de software iniciante está pronta para elevar sua empresa a
                            novos patamares.
                            Com uma equipe altamente qualificada e soluções personalizadas, garantimos resultados
                            excepcionais que atendem
                            às suas necessidades exclusivas.
                            Priorizamos a colaboração com nossos clientes, garantindo transparência
                            e comprometimento em cada etapa do processo.</p>
                        <p> Ao escolher nossa empresa, você está optando por inovação, qualidade e um parceiro
                            confiável para impulsionar o crescimento do seu negócio.
                            Deixe-nos transformar suas ideias em realidade e juntos alcançaremos o sucesso desejado.</p>
                        <div class="advance-social">
                            <a href="#"><button><i class="bi bi-instagram"></i></button></a>
                            <a href="#"><button><i class="bi bi-twitter-x"></i></button></a>
                            <a href="#"><button><i class="bi bi-whatsapp"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <section class="motivos">
        <div class="motivos">
            
            <h2 class="titulo">A EMPRESA MAIS <span>INOVADORA</span> DO MERCADO</h2>
            <p>Compreenda as razões pelas quais sua empresa se beneficiará ao contar com nossa equipe de tecnologia.</p>
            <div class="container">
                <div class="colunas">
                    <div class="col col1">
                        <i class="bi bi-brush"></i>
                <h3>Designe</h3>
                <p>A equipe de design UX da nossa empresa de software é altamente inovadora, focada em criar experiências digitais intuitivas e envolventes. Combinando criatividade e expertise técnica, entregamos soluções que elevam o padrão da indústria, proporcionando aos usuários uma jornada memorável e eficiente.</p>
        
                <i class="bi bi-globe-americas"></i>
                <h3>Desenvolvimeto completo</h3>
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
            </div><!--colunas-->
        </div><!--container-->
        </div><!--motivos-->
       </section>
        <section class="metodologia" id="metodologia">
            <div class="desenvolvimento">
                <h2 class="titulo">COMO <span>CONCRETIZAMOS</span> NOSSAS<BR>IDEIAS EM <SPAN>CÓDIGOS</SPAN></h2>
                <div class="main">
                    <div class="card card1">
                        <h1>1 ETAPA</h1>
                        <h2>ÁNALISE DE REQUISITOS</h2>
                        <p>Realizamos uma análise de requisitos completa para entender as necessidades dos clientes,
                            identificando requisitos funcionais e não funcionais essenciais. Trabalhamos em colaboração
                            para validar e refinar esses requisitos, assegurando que cada solução desenvolvida atenda às
                            expectativas e objetivos de negócio.</p>
                    </div>
                    <div class="card card1">
                        <h1>2 ETAPA</h1>
                        <h2>DESIGN</h2>
                        <p>Nossa equipe prioriza o design centrado no usuário para criar interfaces intuitivas e
                            atraentes. Com foco na experiência do usuário, nossos designs são meticulosamente elaborados
                            para garantir facilidade de uso e eficiência. Buscamos a harmonia entre estética e
                            funcionalidade em cada detalhe de nossos produtos.</p>
                    </div>
                    <div class="card card1">
                        <h1>3 ETAPA</h1>
                        <h2>DESENVOLVIMENTO</h2>
                        <p>Nesse processo é a hora da mão na massa, é pautado pela excelência técnica e eficiência
                            operacional. Utilizamos metodologias ágeis para garantir entregas rápidas e iterativas,
                            adaptando-nos continuamente às necessidades do cliente. A qualidade e a inovação são pilares
                            fundamentais em cada linha de código que escrevemos.</p>
                    </div>
                </div>
                <div class="dev-2">
                    <div class="card card1">
                        <h1> 4 ETAPA</h1>
                        <h2>SPRINT</h2>
                        <p>Concretizamos entregas ágeis para que você possa avaliar e certificar seu projeto em todas as
                            fases, sem a necessidade de efetuar alterações no produto final. Nossa missão é garantir uma
                            jornada fluida e eficaz, assegurando que seu projeto progrida sem obstáculos e atinja suas
                            metas com qualidade excepcional.</p>
                    </div>
                    <div class="card card1">
                        <h1>5 ETAPA</h1>
                        <h2>HOSPEDAGEM</h2>
                        <p>Após a conclusão do seu projeto, oferecemos hospedagem especializada para garantir uma
                            presença online contínua e confiável. Conte conosco para manter seu site acessível e
                            funcionando perfeitamente, enquanto você foca no crescimento do seu negócio. Garanta uma
                            presença online estável e eficaz com nossa hospedagem dedicada.</p>
                    </div>
                </div>
            </div>
        </section>
    
     
        <section class="formulario" id="formulario">
            <div class="interface">
                <h2 class="titulo">FALE <span>CONOSCO</span></h2>
                <form name="form_msg" id="form_msg" action="index.php" method="POST">
                    <input type="text" name="nome" id="nome" placeholder="Nome completo" required>
                    <textarea name="mensagem" id="mensagem" placeholder="Mensagem" required></textarea>
                    <div class="advance-enviar"> <input type="submit" value="ENVIAR"></div>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <div class="container-footer">
            <div class="row-footer">
                <div class="footer-col">
                    <h4>Empresa</h4>
                    <ul>
                        <li><a href="#">Ínicio</a></li>
                        <li><a href="">Sobre nós</a></li>
                        <li><a href="">Metodologia</a></li>
                        <li><a href="">Equipe</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Obter ajuda</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Status De Pedido</a></li>
                        <li><a href="#">Opções De Pagamento</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                </div>

                <div class="footer-col">
                    <h4>Entre em contato conosco!</h4>
                    <div class="form-sub">
                        <form>
                            <input type="email" placeholder="Digite o seu e-mail" required>
                            <button>inscrever</button>
                        </form>
                    </div>

                    <div class="medias-socias">
                        <a href="#"><i class="bi bi-whatsapp"></i>
                            <a href="#"> <i class="bi bi-instagram"></i>
                                <a href="#"> <i class="bi bi-twitter"></i> </a>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <script src="menu.js"></script>
</body>

</html>