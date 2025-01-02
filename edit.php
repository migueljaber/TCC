<?php
    session_start();
    include_once('conexao.php');

    if (!empty($_GET['id'])) {
        $id = $_GET['id'];  

        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conexao->query($sqlSelect);

        if ($result->num_rows > 0) {
            
            while ($user_data = mysqli_fetch_assoc($result)) {
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $numero = $user_data['numero'];
            }
        } else {

            header('Location: inicio.php');
        }
    } else {
        // Se o 'id' não for passado na URL, redireciona para a página inicial
        header('Location: inicio.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuário</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="edit.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="./cadastro/cadastro.js"></script>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <img src="./cadastro/animatecad.svg" class="left-image" alt="barber">
        </div>
        <div class="right-login">
            <a href="inicio.php" class="btn-voltar">
                <i class='bx bx-left-arrow-alt'></i> Voltar
            </a>
            <div class="wrapper">
                <h1>Editar usuário</h1>
                <form action="./saveEdit.php" method="POST">
                    <div class="input-columns">
                        <div class="col">
                            <div class="textfield">
                                <label for="usuario">Nome</label>
                                <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($nome); ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="input-columns">
                        <div class="col">
                            <div class="textfield">
                                <label for="numero">Número</label>
                                <input type="text" id="numero" name="numero" value="<?php echo htmlspecialchars($numero); ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="input-columns">
                        <div class="col">
                            <div class="textfield">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
                        <button type="submit" name="update" id="submit" class="btn">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
