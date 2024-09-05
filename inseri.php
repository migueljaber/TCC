<?php
include_once("conexao.php");

$usuario = filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$numero = filter_input(INPUT_POST, "numero", FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING);

$result_usuario="INSERT INTO cadastro (usuario, cpf, email, numero, senha) VALUES ('$usuario', '$cpf', '$email', '$numero', '$senha')";
$SQL=mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: cadastro.php");
}