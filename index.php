
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt_br">
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="16x16"  href="imagem/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff"> 
    <link rel="stylesheet" href="css-personalizados/index.css">
    <title>Faça seu Login</title>
</head>
<body>
    <?php
    if(isset($_SESSION['errorr'])):
    ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>ERRO!</strong> Campos de preenchimento obrigatorio não preenchidos!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
    endif;
    unset($_SESSION['errorr']);
    ?>

    <?php
    if(isset($_SESSION['erro_de_login'])):
    ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>ERRO!</strong> Usuario Invalido!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
    endif;
    unset($_SESSION['erro_de_login']);
    ?>

    <!-- logo -->
    <div id="logo">
        <img src="imagem/logo.png" alt="">
    </div>
<!-- formulario de login -->
	<div class="container">
		<div class="cards">
			<h1>Entrar</h1>
			<form action="processamento-paginas/login.php" method="POST">
            <div class="box">
                <div class="label-floatt">
                    <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                </div>   
            </div>
            <div class="field">
                <div class="label-floatt">
                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                </div>
                
        	</div>
            <div class="teste">
                <button type="submit" class="button">Entrar</button>
            </div>   
        </form>

		</div>
	</div>
    <div id="copy">
        <p> © 2022 INOVEH, V0.02 </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>