<?php
session_start();
include_once('conexao.php');

// Verifica se o formulário foi enviado
if (isset($_POST['update']) && isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];

    // Atualiza apenas os campos nome, email e numero
    $sqlUpdate = "UPDATE usuarios SET nome='$nome', email='$email', numero='$numero' WHERE id=$id";

    if ($conexao->query($sqlUpdate) === TRUE) {
        // Redireciona para a página de perfil ou uma página de confirmação
        header("Location: inicio.php"); // Substitua por sua página desejada
    } else {
        echo "Erro ao atualizar: " . $conexao->error;
    }
} else {
    header("Location: edit.php"); // Redireciona caso o usuário não esteja logado ou não tenha enviado o formulário
}
?>
