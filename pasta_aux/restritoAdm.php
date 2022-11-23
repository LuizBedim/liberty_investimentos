<?php
include("verifica_restrito.php");
if(!isset($_SESSION))
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style.css -->
    <link rel="stylesheet" type="text/css" href="../css/restrito_css/restrito_style.css">
    <!-- Icone da página -->
    <link rel="shortcut icon" href="../img/icon2.ico">
    <!-- Font-family KoHo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@200&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Admin</title>
</head>
<body>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <nav>
                    <div class="container-nav">
                        <h1>Liberty</h1>
                        <div class="menu">
                            <a href="#" class="is-active">Home</a>
                            <a href="exibir_usuarios.php">Usuários</a>
                        </div>

                        <button class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </nav>
            </div> <!-- col-12 -->
        </div> <!-- row -->

        <div class="row main">

            <div class="col-1 col-sm-4"></div>
            <div class="col-10 col-sm-4 bg-main">
                <h1>Admin</h1>
                <a href="exibir_usuarios.php">Exibir usuários</a><br>
                <a href="sair.php">Sair</a>
            </div>
            <div class="col-1 col-sm-4"></div>
            
        </div> <!-- row -->

    </div> <!-- container-fluid -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>
</html>