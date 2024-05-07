<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Document</title>
</head>
<body>
   
<section class="formulario" id="formulario">
            <div class="interface">
                <h2 class="titulo">FALE <span>CONOSCO</span></h2>
                <form name="form_msg" id="form_msg" action="https://formsubmit.co/advancedessoft@gmail.com" method="POST">
                    <input type="text" name="nome" id="nome" placeholder="Nome" required>
                    <input type="email" name="email" id="email" placeholder="E-mail" required>
                    <input type="number" name="CPF" id="CPF" placeholder="CPF" required>
                    <textarea name="mensagem" id="mensagem" placeholder="Mensagem" required></textarea>
                    <div class="advance-enviar"> <input type="submit" value="ENVIAR"></div>
                </form>
            </div>
        </section>
</body>
</html>