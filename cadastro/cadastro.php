<?php
if (!isset($nome))
    $nome = "";

if (!isset($sobrenome))
    $sobrenome = "";

if (!isset($email))
    $email = "";

if (!isset($senha))
    $senha = "";

if (!isset($cpf))
    $cpf = "";

if (!isset($celular))
    $celular = "";

if (!isset($cep))
    $cep = "";

if (!isset($numero))
    $numero = "";

$msg = "";
if(isset($_GET["msg"]))
    $msg = $_GET["msg"];

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style.css -->
    <link rel="stylesheet" href="../assets/css/cadastro_css/cadastro_style.css">
    <!-- Icone da página -->
    <link rel="shortcut icon" href="../assets/img/icon2.ico">
    <!-- Font-family KoHo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@200&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Cadastro</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12">
                <header>
                    <nav class="nav-bar">
                        <div class="logo">
                            <h1>Liberty</h1>
                        </div>
                        <div class="nav-list">
                            <ul>
                                <li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Cadastro</a></li>
                                <li class="nav-item"><a href="../restrito/admin.php" class="nav-link">Admin</a></li>
                            </ul>
                        </div>

                        <div class="mobile-menu-icon">
                            <button onclick="menuShow()"><img class="icon" src="../assets/img/menu_white_36dp.svg" alt="Menu"></button>
                        </div>
                    </nav>

                    <div class="mobile-menu">
                        <ul>
                            <li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Cadastro</a></li>
                            <li class="nav-item"><a href="../restrito/admin.php" class="nav-link">Admin</a></li>
                        </ul>
                    </div>
                </header>
            </div>
        </div>

        <div class="row image-container">
            <div class="col-1 col-sm-4"></div>
            <div class="col-10 col-sm-4 card-center">
                <form method="POST" action="../php/process_cadastrar.php" class="card-cadastro" id="form" onsubmit="valForm(this); return false;">
                    <h2>Cadastro</h2>
                    <div class="textfield">
                        <label name="nome">Nome:</label>
                        <input type="text" name="nome" id="nome" maxlength="30" placeholder="Nome" class="required" >
                        <span class="span-required"></span>
                    </div>
                    <div class="textfield">
                        <label name="sobrenome">Sobrenome:</label>
                        <input type="text" name="sobrenome" id="sobrenome" maxlength="30" placeholder="Sobrenome" class="required">
                        <span class="span-required"></span>
                    </div>
                    <div class="textfield">
                        <label name="email">E-mail:</label>
                        <input type="email" name="email" id="email" maxlength="45" placeholder="Email" class="required">
                        <span class="span-required"></span>
                    </div>
                    <div class="textfield">
                        <label name="senha">Senha:</label>
                        <input type="password" name="senha" id="senha" maxlength="30" placeholder="Senha" class="required">
                        <span class="span-required"></span>
                    </div>
                    <div class="textfield">
                        <label name="cpf">CPF:</label>
                        <input type="text" name="cpf" id="cpf" autocomplete="off" maxlength="14" placeholder="000.000.000-00" class="required">
                        <span class="span-required"></span>
                    </div>
                    <div class="textfield">
                        <label name="celular">Celular:</label>
                        <input type="text" name="celular" id="celular" autocomplete="off" maxlength="14" placeholder="(00)00000-0000" class="required">
                        <span class="span-required"></span>
                    </div>
                    <div class="textfield">
                        <label name="cep">Cep:</label>
                        <input type="text" name="cep" id="cep" maxlength="9" placeholder="00000-000" class="required">
                        <span class="span-required"></span>
                    </div>
                    <div class="textfield">
                        <label name="numero">Número:</label>
                        <input type="text" name="numero" id="numero" maxlength="5" placeholder="000" class="required">
                        <span class="span-required"></span>
                    </div>
                    <p class="alert"><?= $msg ?></p>
                    <!-- <button type="submit" id="button" name="button" class="btn-form">Cadastrar</button> -->
                    <input type="submit" value="Cadastrar" class="btn-form">
                </form>
            </div>
            <div class="col-1 col-sm-4"></div>
        </div>
    </div>

    <script src="../assets/js/cadastro/mask.js"></script>
    <script src="../assets/js/navbar/nav.js"></script>
    <script src="../assets/js/form/form.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>