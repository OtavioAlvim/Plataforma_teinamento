<?php
include('processamento-paginas/verifica_login.php');
include('processamento-paginas/conexao.php');
//Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina 
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
if(!isset($_GET['pesquisar'])){
	header("Location: avante.php");
}else{
	$valor_pesquisar = $_GET['pesquisar'];
}


//Selecionar todos os cursos da tabela
$result_curso = "SELECT * FROM videos v WHERE v.`type`='Gestor-Inoveh' AND grupo = '{$_SESSION['grupo']}' and name LIKE '%$valor_pesquisar%'";
$resultado_curso = mysqli_query($conn, $result_curso);

//Contar o total de cursos
$total_cursos = mysqli_num_rows($resultado_curso);

//Seta a quantidade de cursos por pagina
$quantidade_pg = 6;

//calcular o número de pagina necessárias para apresentar os cursos
$num_pagina = ceil($total_cursos/$quantidade_pg);

//Calcular o inicio da visualizacao
$incio = ($quantidade_pg*$pagina)-$quantidade_pg;

//Selecionar os cursos a serem apresentado na página
$result_cursos = "SELECT * FROM videos v WHERE v.`type`='Gestor-Inoveh' AND grupo = '{$_SESSION['grupo']}' and name LIKE '%$valor_pesquisar%' limit $incio, $quantidade_pg";
$resultado_cursos = mysqli_query($conn, $result_cursos);
$total_cursos = mysqli_num_rows($resultado_cursos);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $_SESSION['usuario'];?></title>
		<link rel="icon" type="image/png" sizes="16x16"  href="imagem/favicon-16x16.png">
    	<meta name="msapplication-TileColor" content="#ffffff">
    	<meta name="theme-color" content="#ffffff"> 
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css-personalizados/style.css">
	</head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<div class="row">
				<div class="col-sm-6 col-md-6">
					<div class="logo" >
<!-- Valida qual logo sera usada para o sistema que o usuario foi cadastrado -->
							<a href="menu-gestor.php">
							<?php
								if($_SESSION['sistema'] == 'Gestor-Inoveh' ):
							?>
								<img src="logos/Logo-Inoveh-Gestor.png" alt="gestor">
							<?php
								endif;
							?>

							<?php
								if($_SESSION['sistema'] == 'Gestor-Pet' ):
							?>
								<img src="logos/Logo Inoveh Pet 154x68.png" alt="pet">
							<?php
								endif;
							?>

							<?php
								if($_SESSION['sistema'] == 'Gestor-Food' ):
							?>
								<img src="logos/food.png" alt="food">
							<?php
								endif;
							?>

							<?php
								if($_SESSION['sistema'] == 'Gestor-Agro' ):
							?>
								<img src="logos/Logo Inoveh Agro 154x68.png" alt="agro">
							<?php
								endif;
							?>

							<?php
								if($_SESSION['sistema'] == 'Gestor-Salao' ):
							?>
								<img src="logos/Logo Inoveh Salão 154x68.png" alt="salao">
							<?php
								endif;
							?>
								<!-- <img src="logos/Logo-Inoveh-Gestor.png" alt=""> -->
							</div></a>
					</div>
					<!-- <div class="col-sm-6 col-md-6">
						<form class="form-inline" method="GET" action="pesquisar-avante.php">
							<div class="form-group">
								<label for="exampleInputName2">Pesquisar</label>
								<input type="text" name="pesquisar" class="form-control" id="exampleInputName2" placeholder="Digitar...">
							</div>
							<button type="submit" class="btn btn-primary">Pesquisar</button>
						</form>
					</div> -->

			<form action="pesquisar-avante.php" method="get">
				<div class="barra-pesquisa" >
					<input type="text" name="pesquisar" class="barra-pesquisas" placeholder="Pesquisar...">
					<button type="submit" class="btn btn-primary">Pesquisar</button>
				</div>
			</form>
			
				</div>
			</div>
			<div class="botao">
       			<a class="btn btn-primary" href="avante.php" role="button">Voltar</a>
    		</div><br>
			<div class="row">
				<?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos)){
					$_SESSION['id'] = $rows_cursos['id'];
					$_SESSION['codee'] = $rows_cursos['code'];
					$_SESSION['name'] = $rows_cursos['name']; 
					?>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="https://img.youtube.com/vi/<?php echo $_SESSION['codee']; ?>/maxresdefault.jpg" alt="...">
							<div class="caption text-center">
								<a href="reproducao-video-avante.php?id_curso_avante=<?php echo $_SESSION['id']; ?>"><h3><?php echo $_SESSION['name']; ?></h3></a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
			<?php
				//Verificar a pagina anterior e posterior
				$pagina_anterior = $pagina - 1;
				$pagina_posterior = $pagina + 1;
			?>
			<nav class="text-center">
				<ul class="pagination">
					<li>
						<?php
						if($pagina_anterior != 0){ ?>
							<a href="pesquisar-avante.php?pagina=<?php echo $pagina_anterior; ?>&pesquisar=<?php echo $valor_pesquisar; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						<?php }else{ ?>
							<span aria-hidden="true">&laquo;</span>
					<?php }  ?>
					</li>
					<?php 
					//Apresentar a paginacao
					for($i = 1; $i < $num_pagina + 1; $i++){ ?>
						<li><a href="pesquisar-avante.php?pagina=<?php echo $i; ?>&pesquisar=<?php echo $valor_pesquisar; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					<li>
						<?php
						if($pagina_posterior <= $num_pagina){ ?>
							<a href="pesquisar-avante.php?pagina=<?php echo $pagina_posterior; ?>&pesquisar=<?php echo $valor_pesquisar; ?>" aria-label="Previous">
								<span aria-hidden="true">&raquo;</span>
							</a>
						<?php }else{ ?>
							<span aria-hidden="true">&raquo;</span>
					<?php }  ?>
					</li>
				</ul>
			</nav>
		</div>
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>