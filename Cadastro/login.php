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
    <div class="wrapper">
        <form action="">
        <h1>ENTRAR</h1>
        <div class="input-box">
            <input type="text" placeholder="Usuário"
            required>
            <box-icon type='solid' name='user'></box-icon>
        </div>
        <div class="input-box">
            <input type="password" placeholder="Senha"
            required>
            <box-icon name='lock-alt' type='solid' ></box-icon>
        </div>
        <div class="lembrar-esqueceu">
            <label><input type="checkbox">Lembrar senha</label>
            <a href="#">Esqueceu a senha?</a>
        </div>

        <button type="submit" class="btn">Login</button>

        <div class="registrar-link">
            <p>Não tem conta? <a href="./cadastro.php">Cadastrar</a></p>
        </div>
    </div><!--wrapper-->
</body>
</html>