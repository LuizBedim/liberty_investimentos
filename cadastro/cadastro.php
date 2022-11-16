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
    <link rel="stylesheet" href="#">
    <!-- Icone da página -->
    <link rel="shortcut icon" href="../img/icon2.ico">
    <!-- Font-family KoHo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@200&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Liberty</title>
    <style>
        :root {
            --primary: #8c38ff;
            --light: #EEEEEE;
            --dark: #212121;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: KoHo;
        }

        .container-nav {
            max-width: 1280px;
            margin: 0 auto;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 99;
            background-color: var(--dark);
            padding: 16px 32px;
            border-bottom: 3px solid var(--primary);
        }

        h1 {
            color: #FFF;
            font-size: 28px;
            font-weight: 900;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .hamburger {
            display: block;
            position: relative;
            z-index: 1;

            user-select: none;

            appearance: none;
            border: none;
            outline: none;
            background: none;
            cursor: pointer;
        }

        .hamburger span {
            display: block;
            width: 33px;
            height: 4px;
            margin-bottom: 5px;
            position: relative;

            background-color: var(--light);
            border-radius: 6px;
            z-index: 1;

            transform-origin: 0 0;

            transition: 0.4s;
        }

        .hamburger:hover span:nth-child(2) {
            transform: translateX(10px);
            background-color: var(--primary);
        }

        .hamburger.is-active span:nth-child(1) {
            transform: translate(0px, -2px) rotate(45deg);
        }

        .hamburger.is-active span:nth-child(2) {
            opacity: 0;
            transform: translateX(15px);
        }

        .hamburger.is-active span:nth-child(3) {
            transform: translate(-3px, 3px) rotate(-45deg);
        }

        .hamburger.is-active:hover span {
            background-color: var(--primary);
        }

        .menu {
            display: none;
            flex: 1 1 0%;
            justify-content: flex-end;
            margin: 0 -16px;
        }

        .menu a {
            color: #FFF;
            margin: 0 16px;
            font-weight: 600;
            text-decoration: none;
            transition: 0.4s;
            padding: 8px 16px;
            border-radius: 99px;
        }

        .menu a.is-active,
        .menu a:hover {
            background-color: var(--primary);
        }

        @media (min-width: 768px) {
            .hamburger {
                display: none;
            }

            .menu {
                display: flex;
            }
        }


        .card-cadastro {
            width: 50vw;

            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 30px 35px;

            background: var(--dark);

            border-radius: 20px;
            box-shadow: 0px 10px 40px #00000056;
        }

        .card-cadastro>h2 {
            color: var(--light);
            font-weight: 800;
            margin: 0;
        }

        .textfield {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;

            margin: 10px 0px;

            border-radius: 10px;

        }

        .btn-form {
            width: 100%;
            padding: 16px 0px;
            margin: 25px;
            border: none;
            border-radius: 8px;
            outline: none;
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 3px;
            color: var(--dark);
            cursor: pointer;

            box-shadow: 0px 10px 40px -12px #21212170;
        }
    </style>
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
                            <a href="../contato/contato.php">Contato</a>
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
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 card-cadastro">
                <form action="../php/process_cadastrar.php" method="POST">
                    <div class="textfield">
                        <label>
                            Nome:<input type="text" name="nome" id="nome" placeholder="Nome" value="<?= $nome ?>"><br>
                        </label>
                    </div>

                    <div class="textfield">
                        <label>
                            Sobrenome:<input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" value="<?= $sobrenome ?>"><br>
                        </label>
                    </div>

                    <div class="textfield">
                        <label>
                            E-mail:<input type="email" name="email" id="email" placeholder="Email" value="<?= $email ?>"><br>
                        </label>
                    </div>

                    <div class="textfield">
                        <label>
                            Senha:<input type="password" name="senha" id="senha" placeholder="Senha" value="<?= $senha ?>"><br>
                        </label>
                    </div>

                    <div class="textfield">
                        <label>
                            Cpf:<input type="text" name="cpf" id="cpf" autocomplete="off" maxlength="14" placeholder="000.000.000-00" value="<?= $cpf ?>"><br>
                        </label>
                    </div>

                    <div class="textfield">
                        <label>
                            Celular:<input type="text" name="celular" id="celular" autocomplete="off" maxlength="14" placeholder="(00)00000-0000" value="<?= $celular ?>"><br>
                        </label>
                    </div>

                    <div class="textfield">
                        <label>
                            Cep:<input type="text" name="cep" id="cep" maxlength="9" placeholder="00000-000" value="<?= $cep ?>"><br>
                        </label>
                    </div>

                    <div class="textfield">
                        <label>
                            Número<input type="text" name="numero" id="numero" placeholder="000" value="<?= $numero ?>"><br>
                        </label>
                    </div>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    




    <script src="../js/cadastro/mask.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>