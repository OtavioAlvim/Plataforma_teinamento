<?php
include('processamento-paginas/verifica_login.php');
include('processamento-paginas/conexao.php');

$sql = "SELECT * FROM grupo";
$resultado_grupo = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css-personalizados/enviar-treinamento.css">
    <title>Envio de treinamento</title>
</head>
<body>
    <?php
    if(isset($_SESSION['erro_ao_inserir'])):
    ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>ERRO!</strong> Necessario preencher ao menos: Nome e link do video.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
    endif;
    unset($_SESSION['erro_ao_inserir']);
    ?>
    <?php
    if(isset($_SESSION['video_inserido'])):
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Parabens!</strong> Treinamento Inserido com sucesso!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
    endif;
    unset($_SESSION['video_inserido']);
    ?>
    <div class="container">
        <div class="caixa">
            <h2>Insira os Dados Abaixo</h2>
            <form action="processamento-paginas/addvideo.php" method="post">
                <div class="box">
                    <div class="label-floatt">
                        <input type=" text" name="name" placeholder= "Nome do Video" />
                    </div>   
                </div>
                    <select name="type">
                        <option>Sia</option>
                        <option>Visual Control</option>
                        <option>Gestor-Inoveh</option>
                        <option>Compilart</option>    
                    </select>
                    <select name="grupo">
                <?php while($rows_grupo = mysqli_fetch_assoc($resultado_grupo))
				{ 
					$_SESSION['nome'] = $rows_grupo['nome'];
					?>	
                        <option><?php echo $_SESSION['nome']; ?></option>    
				<?php } ?>
                </select>
                
                <div class="box">
                    <div class="label-floatt">
                        <input type=" text" name="link" placeholder= "Link do Video" />
                    </div>   
                </div>
                <div class="box">
                    <div class="label-floatt">
                        <input type=" text" name="cnpj" placeholder= "CNPJ" />
                    </div>   
                </div>
                <div class="enviar">
			        <button type="submit" class="button">Cadastrar</button>
		        </div>
                <div class="voltar">
                    <a href="pagina-inicial.php"><button type="button" class="btn btn-primary">Voltar</button></a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>