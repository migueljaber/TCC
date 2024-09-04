<?php
include "conexao.php";

?>
<?php

session_start();

	if($_SESSION['nivel']=="adm"  )  {
		
		echo "<center>Você está logado</center><br><br><br>";	
		
		
		
		}else{
	
			
			header("Location:cadastro.php");
		exit;
			
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cads.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="login.css">

    <title>Cadastro</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>

<body>
    <section class="formulario" id="formulario">
    <div class="interface">
        <h2 class="titulo">CRIAR <span>CONTA</span></h2>
    <div class="wrapper">
        <h1>ENTRAR</h1>
        <form name="form_cadastro" id="form_cadastro" action="inseri.php" method="POST" onsubmit="return validarFormulario()">
        <div class="input-box">
        <input type="text" name="usuario" id="usuario" placeholder="Usuário" maxlength="28" required>
</div>
        <div class="input-box">
        <input type="text" name="cpf" id="cpf" placeholder="CPF" required>
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

        <button type="submit" name="cadastrar" id="cadastrar" class="btn">Cadastrar</button> 

        <div class="registrar-link">
            <p>Já tem conta? <a href="login.php">Entrar</a></p>
        </div>
    </form>
    </div>
    <script src="cadastro.js"></script>
</body>
</html>
    
