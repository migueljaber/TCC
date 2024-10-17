<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="log.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
</head>
<body>
    <div class="main-login">
        <!-- Botão de Voltar -->
        <a href="../index.php" class="btn-voltar">
            <i class='bx bx-left-arrow-alt'></i> Voltar
        </a>

        <div class="left-login">
            <h1>FAÇA PARTE DO NOSSO TIME</h1>
            <img src="../cadastro/animatelog.svg" class="left-image" alt="Logo">
        </div>
        
        <div class="right-login">
            <div class="wrapper">
                <h1>LOGIN</h1>
                <form action="../testLogin.php" method="POST">
                    <div class="textfield">
                        <label for="usuario">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email">
                    </div>
        
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" placeholder="Senha">
                    </div>
        
                    <div class="lembrar-esqueceu">
                        <label><input type="checkbox"> Lembrar senha</label>
                    </div>
        
                   <a href= "../inicio.php"> <button type="submit" name="submit" id="submit" class="btn">Login</button></a>
                </form>
        
                <div class="registrar-link">
                    <p>Não tem conta? <a href="../cadastro/cadastro.php">Cadastrar</a></p>
                </div>
            </div> <!-- wrapper -->
        </div> <!-- right-login -->
    </div>
</body>
</html>
