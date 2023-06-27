<?php
session_start();
include('verifica_login.php');
include('conexao.php');

$id_curso = $_GET['id_curso_compilart'];
$result_cursos = "SELECT * FROM videos WHERE type = 'compilart' and id='$id_curso'";
$resultado_cursos = mysqli_query($conn, $result_cursos);
$row_cursos = mysqli_fetch_assoc($resultado_cursos);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Criar pagina com abas</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1><?php echo $row_cursos['name']; ?></h1>
			</div>
			<div>
				
		<div class="ratio ratio-16x9">
        	<iframe class="ratio-ratio-16x9" src="https://www.youtube-nocookie.com/embed/<?php echo $row_cursos['code']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    	</div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>