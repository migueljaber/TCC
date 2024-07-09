

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cads.css">
    <title>Cadastro</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>
<body>

</section>
<section class="formulario" id="formulario">
    <div class="interface">
        <h2 class="titulo">CRIAR <span>CONTA</span></h2>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <form action="">
        <h1>ENTRAR</h1>
        <form name="form_msg" id="form_msg" action="cadastro.php" method="POST" onsubmit="return validarFormulario()">
        <div class="input-box">
        <input type="text" name="usuario" id="usuario" placeholder="Usuário" maxlength="28" required>
</div>
        <div class="input-box">
        <input type="text" name="CPF" id="CPF" placeholder="CPF" required>
</div>
            <div class="input-box">
            <input type="email" name="email" id="email" placeholder="E-mail" required>
            </div>
            <div class="input-box">
            <input type="text" name="numero" id="numero" placeholder="Número" required>
            </div>
            <div class="input-box">
            <input type="password" name="senha" id="senha" placeholder="Senha" required>
            </div>
            <div class="input-box">
            <input type="password" name="senha2" id="senha2" placeholder="Confirme sua Senha" required>
            </div>        
        <div class="lembrar-esqueceu">
            <label><input type="checkbox">Lembrar senha</label>
            <a href="#">Esqueceu a senha?</a>
        </div>

        <button type="submit" class="btn">Login</button>

        <div class="registrar-link">
            <p>Já tem conta? <a href="./login.php">Entrar</a></p>
        </div>
    </div><!--wrapper-->
</body>
</html>
    
