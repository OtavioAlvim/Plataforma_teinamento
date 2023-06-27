<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css-personalizados/cadastrar-usuario.css">
    <title>cadastrar novo grupo</title>
</head>
<body>
    <?php
    if(isset($_SESSION['error'])):
    ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>ERRO!</strong> Campos de preenchimento obrigatorio não preenchidos!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
    endif;
    unset($_SESSION['error']);
    ?>
    <?php
    if(isset($_SESSION['erro_ao_cadastrar'])):
    ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>ERRO!</strong> Grupo ja cadastrado!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
    endif;
    unset($_SESSION['erro_ao_cadastrar']);
    ?>
    <?php
    if(isset($_SESSION['grupo_cadastrado'])):
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Parabens!</strong> Novo grupo Inserido com sucesso!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
    endif;
    unset($_SESSION['grupo_cadastrado']);
    ?>
    <div class="container">
		<div class="card">
		<h1>Cadastrar grupo</h1>
		<form action="processamento-paginas/processa-grupo.php" method="POST">
                <div class="box">
                    <div class="caixa-texto">
                        <input name="grupo" name="text" class="input is-large" placeholder="Insira Novo Grupo" autofocus="">
                    </div>   
                </div>
            <div class="teste">
                <button type="submit" class="button">Cadastrar</button>
            </div>
            <div class="voltar">
                <a href="pagina-inicial.php"><button type="button" class="btn btn-primary">Voltar</button></a>
            </div> 
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>    
</body>
</html>