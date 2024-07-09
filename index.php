<?php
// Verifica se o método de requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Inclui o arquivo de conexão
    include "/xampp/htdocs/TCC/conexao.php";

    // Filtra e sanitiza as entradas
    $usuario = filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_STRING);
    $CPF = filter_input(INPUT_POST, "CPF", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $numero = filter_input(INPUT_POST, "numero", FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING);
    $senha2 = filter_input(INPUT_POST, "senha2", FILTER_SANITIZE_STRING);

    // Verifica se as senhas coincidem
    if ($senha === $senha2) {
        
        // Prepara a consulta usando prepared statement
        $stmt = $conn->prepare("INSERT INTO cliente (usuario, CPF, email, numero, senha) VALUES (?, ?, ?, ?, ?)");
        
        // Verifica se a preparação da consulta foi bem-sucedida
        if ($stmt) {
            
            // Hash da senha
            $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

            // Bind dos parâmetros e execução da consulta
            $stmt->bind_param("sssss", $usuario, $CPF, $email, $numero, $senha_hash);
            $stmt->execute();

            // Verifica se a consulta foi executada com sucesso
            if ($stmt->affected_rows > 0) {
                echo "Usuário registrado com sucesso.";
            } else {
                echo "Erro ao registrar o usuário.";
            }

            // Fecha o statement
            $stmt->close();
        } else {
            echo "Erro na preparação da consulta.";
        }
    } else {
        echo "As senhas não coincidem.";
    }

    // Fecha a conexão
    $conn->close();
}
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
    <link rel="stylesheet" href="inicio.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="script.js" defer ></script>

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
                <a href="./Cadastro/login.php">
                <button><i class="bi bi-person-circle"></i></button>
                </a>
            </div>
        </div>
    </header>
    <main>
        <section class="inicio" id="inicio">
            <div class="interface">
                <div class="flex">
                    <div class="txt-topo-site">
                       <h1> </h1>
                        <p class="txt">Tecnologia e negócios andam lado a lado. Com uma combinação de um design
                            sofisticado, aplicabilidade intuitiva, otimização para resultados e uma ótima equipe, estamos
                            prontos para criar a presença online dos seus negócios</p>
                        <div class="advance-contato">
                            <a href="#">
                         
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <section class="especialidades" id="especialidades">
            <div class="interface">
                <h2 class="titulo">NOSSAS <span>ESPECIALIDADES</span></h2>
                <div class="flex">
                    <div class="especialidades-box"><a href="./serviços/web.php"><button>
                        <i class="bi bi-code-slash"></i>
                        <h3> desenvolvimento de lading page
                        </h3>
                        </button></a>
                    </div>
                    <div class="especialidades-box"><a href="./serviços/commerce.php"><button>
                        <i class="bi bi-cart"></i>
                        <h3>loja virtual Ecommerce</h3>
                        </button></a>
                    </div>
                    <div class="especialidades-box"><a href="./serviços/hospedagem.php"><button>
                        <i class="bi bi-houses-fill"></i>
                        <h3>Serviço de hospedagem</h3>
                        </button></a>
                    </div>
                    <div class="especialidades-box"><a href="./serviços/consultoria.php"><button>
                        <i class="bi bi-wrench"></i>
                        <h3>Consultoria de TI</h3>
                        </button></a>
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
                        A Advance é uma empresa de desenvolvimento de software fundada por seis alunos do Colégio Realengo como parte de um projeto de TCC. Nossa missão é transformar ideias em realidade através de softwares de alta
                         qualidade e eficiência, utilizando as mais 
                        modernas tecnologias e metodologias ágeis para atender às necessidades específicas de nossos clientes.
Com uma equipe diversa e dedicada, combinamos criatividade, técnica e compromisso para entregar produtos que superem as 
expectativas. Na Advance, acreditamos no poder da inovação e estamos preparados para liderar a transformação digital. Juntos, podemos construir o amanhã.
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
                        <h2>ANÁLISE DE REQUISITOS</h2>
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
    
        <h2 class="titulo">NOSSA <span>EQUIPE</span></h2>
      
        
        <section class="equipe" id= "equipe">
            
            
                <div class="card-group">
                    <div class="card">
                      <img src="imagens/Andrei.jpeg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h3 class="card-title"><u>Andrei Sousa</u></h3>
                        <p class="card-text">Desenvolvedor</p>
                   
                      </div>
                    
                    </div>
                    <div class="card">
                      <img src="./imagens/André.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h3 class="card-title"><u>Carlos André</u></h3>
                        <p class="card-text">Auxiliar de desenvolvimento</p>
                      </div>
                      
                    </div>
                    <div class="card">
                      <img src="./imagens/Luiz.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h3 class="card-title"><u>Luís Gabriel</u></h3>
                        <p class="card-text">Mídias sociais</p>
                      </div>
                     
                    </div>
                  </div>

                  <div class="card-group">
                    <div class="card">
                      <img src="./imagens/Miguel.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h3 class="card-title"><u>Miguel Jaber</u></h3>
                        <p class="card-text">Programador </p>
                   
                      </div>
                    
                    </div>
                    <div class="card">
                      <img src="./imagens/Lucas.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h3 class="card-title"><u>Lucas Laybenith</u></h3>
                        <p class="card-text">Designer</p>
                      </div>
                      
                    </div>
                    <div class="card">
                      <img src="./imagens/david.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h3 class="card-title"><u>David Alves</u></h3>
                        <p class="card-text">Documentador</p>
                      </div>
                     
                    </div>
                  </div>
            
        </section>
        <section class="formulario" id="formulario">
            <div class="interface">
                <h2 class="titulo">FALE <span>CONOSCO</span></h2>
                <form name="form_msg" id="form_msg" action="https://formsubmit.co/advancedessoft@gmail.com" method="POST">
                    <input type="text" name="nome" id="nome" placeholder="Nome" required>
                    <input type="email" name="email" id="email" placeholder="E-mail" required>
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
                    

                    <div class="medias-socias">
                            <a href="#https://www.instagram.com/advance.dev/"> <i class="bi bi-instagram"></i>
                                <a href="#https://x.com/AdvanceDesSoft"> <i class="bi bi-twitter"></i> </a>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <script src="menu.js"></script>
</body>

</html>