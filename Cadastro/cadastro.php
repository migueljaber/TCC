

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>
<body>
    <section>

<button onclick="history.back()" class="btn-voltar">Voltar</button>
<button onclick="window.location.href='login.html'" class="btn-ja-tem-conta" >Já tem conta?</button>
</section>
<section class="formulario" id="formulario">
    <div class="interface">
        <h2 class="titulo">CRIAR <span>CONTA</span></h2>
        <form name="form_msg" id="form_msg" action="cadastro.php" method="POST" onsubmit="return validarFormulario()">
            <input type="text" name="usuario" id="usuario" placeholder="Usuário" maxlength="28" required>
            <input type="text" name="CPF" id="CPF" placeholder="CPF" required>
            <input type="email" name="email" id="email" placeholder="E-mail" required>
            <input type="text" name="numero" id="numero" placeholder="Número" required>
            <input type="password" name="senha" id="senha" placeholder="Senha" required>
            <input type="password" name="senha2" id="senha2" placeholder="Confirme sua Senha" required>

            <div class="advance-enviar"> <input type="submit" value="CRIAR"></div>
        </form>
    </div>
</section>

<script src="./cadastro.js"></script>
</body>
</html>
