<?php
include "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cads.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="cadastrar.css">

    <title>Cadastro</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#cpf').mask('000.000.000-00');
        });
    </script>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>ENTRE NO FUTURO COM A ADVANCE</h1>
            <img src="../cadastro/animatecad.svg" class="left-image" alt="barber">
        </div>
    
        <div class="right-login">
            <div class="wrapper">
                <h1>CADASTRO</h1>
                <div class="input-columns">
                    <div class="col">
                        <div class="textfield">
                            <label for="usuario">Usuário</label>
                            <input type="text" id="usuario" name="usuario" placeholder="Usuário">
                        </div>
                    </div>
                    <div class="col">
                        <div class="textfield">
                            <label for="cpf">CPF</label>
                            <input type="text" id="cpf" name="cpf" placeholder="CPF">
                        </div>
                    </div>
                </div>
                <div class="input-columns">
                    <div class="col">
                        <div class="textfield">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col">
                        <div class="textfield">
                            <label for="numero">Número</label>
                            <input type="text" id="numero" name="numero" placeholder="Número">
                        </div>
                    </div>
                </div>
                <div class="input-columns">
                    <div class="col">
                        <div class="textfield">
                            <label for="senha">Senha</label>
                            <input type="password" id="senha" name="senha" placeholder="Senha">
                        </div>
                    </div>
                    <div class="col">
                        <div class="textfield">
                            <label for="confirmar_senha">Confirmar Senha</label>
                            <input type="password" id="confirmar_senha" name="confirmar_senha" placeholder="Confirmar Senha">
                        </div>
                    </div>
                </div>
                <div class="lembrar-esqueceu">
                    <label><input type="checkbox"> Lembrar senha</label>
                </div>

                <button type="submit" class="btn">Cadastrar</button>

                <div class="registrar-link">
                    <p>Já tem conta? <a href="../cadastro/login.php">Entrar</a></p>
                </div>
            </div> <!-- wrapper -->
        </div> <!-- right-login -->
    </div>
</body>
</html>