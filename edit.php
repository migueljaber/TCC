<?php
    include_once('conexao.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $senha = $user_data['senha'];
                $email = $user_data['email'];
                $numero = $user_data['numero'];
                $cpf = $user_data['cpf'];
            }
        }
        else
        {
            header('Location: select.php');
        }
    }
    else
    {
        header('Location: select.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuário</title>
    <link rel="stylesheet" href="./cadastro/cadastrar.css">
</head>
<body>
    <a href="select.php">Voltar</a>
    <div class="main-login">
        <div class="left-login">
            <h1>ENTRE NO FUTURO COM A ADVANCE</h1>
            <img src="./cadastro/animatecad.svg" class="left-image" alt="barber">
        </div>
    
        <div class="right-login">
            <div class="wrapper">
                <h1>CADASTRO</h1>
                <form action="./saveEdit.php" method="POST">
                <div class="input-columns">
                    <div class="col">
                        <div class="textfield">
                            <label for="usuario">Nome</label>
                            <input type="text" id="nome" name="nome" value=<?php echo $nome;?> required>>
                        </div>
                    </div>
                    <div class="col">
                        <div class="textfield">
                            <label for="cpf">CPF</label>
                            <input type="text" id="cpf" name="cpf" value=<?php echo $cpf;?> required>>
                        </div>
                    </div>
                </div>
                <div class="input-columns">
                    <div class="col">
                        <div class="textfield">
                            <label for="numero">Número</label>
                            <input type="text" id="numero" name="numero" value=<?php echo $numero;?> required>>
                        </div>
                    </div>
                    <div class="col">
                        <div class="textfield">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value=<?php echo $email;?> required>>
                        </div>
                    </div>
                </div>
                <div class="input-columns">
                    <div class="col">
                        <div class="textfield">
                            <label for="senha">Senha</label>
                            <input type="text" id="senha" name="senha" value=<?php echo $senha;?> required>
                        </div>
                    </div>
                    <div class="col">
                    <input type="hidden" name="id" value=<?php echo $id;?>>
                    <input type="submit" name="update" id="submit">
                </div>
</body>
</html>