<?php
include('processamento-paginas/verifica_login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Seja bem vindo <?php echo $_SESSION['usuario'];?>!</h2>
    <h1>voce não tem permissão de acesso,Favor entrar em contato com o suporte tecnico!</h1>
    <h2><a href="logout.php">Sair</a></h2>
</body>
</html>