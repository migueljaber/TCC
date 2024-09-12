<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>login</title>
</head>
<body>
    <div class="main-login">
    <div class="left-login">
        <h1>FAÇA PARTE DO NOSSO TIME</h1>
        <img src="../cadastro/animatelog.svg" class="left-image" alt="barber">
    </div>
    
    <div class="right-login">
        <div class="wrapper">
            <h1>LOGIN</h1>
    
            <div class="textfield">
                <label for="usuario">Usuário</label>
                <input type="text" id="usuario" name="usuario" placeholder="Usuário">
            </div>
    
            <div class="textfield">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Senha">
            </div>
    
            <div class="lembrar-esqueceu">
                <label><input type="checkbox"> Lembrar senha</label>
                
            </div>
    
            <button type="submit" class="btn">Login</button>
    
            <div class="registrar-link">
                <p>Não tem conta?          <a href="../cadastro/cadastro.php">Cadastrar</a></p>
            </div>
        </div> <!-- wrapper -->
    </div> <!-- right-login -->
</div>
</body>
</html>