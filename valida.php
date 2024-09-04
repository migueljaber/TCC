﻿<?php

include "conexao.php";

session_start();
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>

 <?php
    session_start(); 
        //Incluindo a conexão com banco de dados   
    include_once("conexao.php");    
	
    //O campo usuário e senha preenchido entra no if para validar
    if((isset($_POST['usuario'])) && (isset($_POST['senha']))){
        $usuario = mysqli_real_escape_string($conn, $_POST['usuario']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
       
            
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $result_usuario = "SELECT * FROM cadastro WHERE usuario = '$usuario' && senha = '$senha' ";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){
            $_SESSION['id'] = $resultado['id'];
            $_SESSION['nome'] = $resultado['nome'];
            $_SESSION['nivel'] = $resultado['nivel'];
            $_SESSION['usuario'] = $resultado['usuario'];
			
			
			
            if($_SESSION['nivel'] == "adm"){
				
                header("Location:select.php");
				
            }elseif($_SESSION['nivel'] == "cliente"){
				
                header("Location:index.php");
            }else{
                header("Location:erro.php");
            }
        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        }else{    
            //Váriavel global recebendo a mensagem de erro
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            header("Location:erro.php");
        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location:erro.php");
    }
?>