<?php
include "conexao.php";    
    $usuario=filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_STRING);
    $email=filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
    $numero=filter_input(INPUT_POST, "numero", FILTER_SANITIZE_STRING);
    $senha=filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING);



    $result_usuario="INSERT INTO feedback (nome, mensagem) VALUES ('$nome', '$mensagem')";
    $SQL=mysqli_query($conn, $result_usuario);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Document</title>
</head>
<body>
   
<section class="formulario" id="formulario">
            <div class="interface">
                <h2 class="titulo">CRIAR <span>CONTA</span></h2>
                <form name="form_msg" id="form_msg" action="cadastro.php" method="POST">
                    <input type="text" name="usuario" id="usuario" placeholder="Usuário" required>
                    <input type="email" name="email" id="email" placeholder="E-mail" required>
                    <input type="number" name="numero" id="numero" placeholder="Número" required>
                    <input type="password" name="senha" id="senha" placeholder="Senha" required>
                    <input type="password" name="senha" id="senha" placeholder="Confirme sua Senha" required>

                    <input type="number" name="CPF" id="CPF" placeholder="CPF" required>
                    <div class="advance-enviar"> <input type="submit" value="CRIAR"></div>
                </form>
            </div>
        </section>
</body>
</html>