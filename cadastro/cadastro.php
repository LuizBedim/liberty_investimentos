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
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style.css -->
    <link rel="stylesheet" href="../css/cadastro_css/cadastro_style.css">
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
            <div class="col-12">
                <nav>
                    <div class="container-nav">
                        <h1>Liberty</h1>

                        <div class="menu">
                            <a href="../index.php">Home</a>
                            <a href="#" class="is-active">Cadastro</a>
                            <a href="../restrito/admin.php">Admin</a>
                        </div>

                        <button class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row image-container">
            <div class="col-1 col-sm-4"></div>
            <div class="col-10 col-sm-4 card-center">
                <form action="../php/process_cadastrar.php" method="POST" class="card-cadastro">
                <h2>Cadastro</h2>
                    <div class="textfield">
                        <label name="nome">Nome:</label>
                        <input type="text" name="nome" id="nome" placeholder="Nome">
                    </div>
                    <div class="textfield">
                        <label name="sobrenome">Sobrenome:</label>
                        <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome">
                    </div>
                    <div class="textfield">
                        <label name="email">E-mail:</label>
                        <input type="email" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="textfield">
                        <label name="senha">Senha:</label>
                        <input type="password" name="senha" id="senha" placeholder="Senha">
                    </div>
                    <div class="textfield">
                        <label name="cpf">CPF:</label>
                        <input type="text" name="cpf" id="cpf" autocomplete="off" maxlength="14" placeholder="000.000.000-00">
                    </div>
                    <div class="textfield">
                        <label name="celular">Celular:</label>
                        <input type="text" name="celular" id="celular" autocomplete="off" maxlength="14" placeholder="(00)00000-0000">
                    </div>
                    <div class="textfield">
                        <label name="cep">Cep:</label>
                        <input type="text" name="cep" id="cep" maxlength="9" placeholder="00000-000">
                    </div>
                    <div class="textfield">
                        <label name="numero">Número:</label>
                        <input type="text" name="numero" id="numero" placeholder="000">
                    </div>
                    <input type="submit" class="btn-form" value="cadastrar">
                </form>
            </div>
            <div class="col-1 col-sm-4"></div>
        </div>
    </div>
    




    <script src="../js/cadastro/mask.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>