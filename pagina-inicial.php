<?php
include('processamento-paginas/verifica_login.php');
?>
<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16"  href="imagem/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css-personalizados/pagina-inicial.css">
    
    <title>Pagina Inicial</title>
</head>

<body>
    <nav class="navbar bg-light fixed-top ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class= "tes" src="imagem/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <div class="menu">
                <img src="imagens/iconemenu.png" alt="">
            </div>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu Rápido</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="cadastrar-usuario.php">Cadastrar novo usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="cadastro-grupo.php">Cadastrar grupo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="enviar-treinamento.php">Enviar novo treinamento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="menu-avante.php">Pagina Inicial Gestor Inoveh</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sia.php">Pagina Inicial SIA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="visual-control.php">Pagina Inicial Visial-Control</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="compilart.php">Pagina Inicial Compilart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Área Restrita</a>
                </li>
                </ul>
            </div>
            </div>
        </div>
    </nav>
    <h1>Guia Inicial:</h1>
    <hr>
    <div class="botao">
        <a class="btn btn-primary" href="logout.php" role="button">Sair</a>
    </div>
    <div class="container">
        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/Sqoy56PgVH4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>