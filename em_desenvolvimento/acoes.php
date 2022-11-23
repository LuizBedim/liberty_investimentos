<?php
include("../php/verifica.php");
if (!isset($_SESSION))
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style.css -->
    <link rel="stylesheet" href="../assets/css/em_desenvolvimento/em_desenvolvimento.css">
    <!-- Icone da página -->
    <link rel="shortcut icon" href="../img/icon2.ico">
    <!-- Font-family KoHo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@200&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Liberty</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <nav>
                <div class="container-nav">
                    <h1>Liberty</h1>
                    
                    <div class="menu">
                        <a href="#" class="is-active">Ações</a>
                        <a href="mercado.php">Mercado</a>
                        <a href="live.php">Live</a>
                        <a href="../php/logado.php">Minha conta</a>
                    </div>
                    
                    <button class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </nav>
        </div> <!-- row -->
        
        
        <div class="row image-container">
            <div class="col-1 col-sm-3"></div>
            <div class="col-10 col-sm-6 card-center">
                <h1 class="color-text">Página em desenvolvimento</h1>
                <hr>
                <a href="../php/logado.php">Minha conta</a><hr>
                <a href="../php/sair.php">Sair</a>
            </div>
            <div class="col-1 col-sm-3"></div>
        </div> <!-- row -->
    </div> <!-- container-fluid -->
</body>

</html>