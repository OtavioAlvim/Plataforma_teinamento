<?php
include('processamento-paginas/verifica_login.php');
include('processamento-paginas/conexao.php');

$id_curso = $_GET['id_curso_avante'];
$result_cursos = "SELECT * FROM videos WHERE type = '{$_SESSION['sistema']}' and id='$id_curso'";
$resultado_cursos = mysqli_query($conn, $result_cursos);
$row_cursos = mysqli_fetch_assoc($resultado_cursos);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $row_cursos['name']; ?></title>
		<link rel="icon" type="image/png" sizes="16x16"  href="imagem/favicon-16x16.png">
    	<meta name="msapplication-TileColor" content="#ffffff">
    	<meta name="theme-color" content="#ffffff"> 
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css-personalizados/reproducao-video.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="css-personalizados/style.css">
	</head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1><?php echo $row_cursos['name']; ?></h1>
			</div>
			<div>

			<div class="botao">
       			<a class="btn btn-primary btn-lg" href="avante.php" role="button">Voltar</a>
    		</div><br>

		<div class="ratio ratio-16x9">
        	<iframe class="ratio-ratio-16x9" src="https://www.youtube-nocookie.com/embed/<?php echo $row_cursos['code']; ?>?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    	</div><br>

			<a class="botão-whatsapp" href="https://wa.me/553588319964?text=Olá! Sou usuário do <?php echo $_SESSION['sistema']; ?>, tenho uma duvida a respeito do vídeo: <?php echo $row_cursos['name']; ?>, Poderia me Auxiliar, Por favor?  " target="_blanck">
			<i class="fa fa-whatsapp"></i>		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>