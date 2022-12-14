<?php 
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
    <link rel="stylesheet" type="text/css" href="assets/css/index_style/index_style.css">
    <!-- Icone da página -->
    <link rel="shortcut icon" href="assets/img/icon2.ico">
    <!-- Font-family KoHo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@200&display=swap" rel="stylesheet">
    <title>Liberty</title>
    </style>
</head>

<body>

    <header>
        <nav class="nav-bar">
            <div class="logo">
                <h1>Liberty</h1>
            </div>
            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="cadastro/cadastro.php" class="nav-link">Cadastro</a></li>
                    <li class="nav-item"><a href="restrito/admin.php" class="nav-link">Admin</a></li>
                </ul>
            </div>

            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img class="icon" src="assets/img/menu_white_36dp.svg" alt="Menu"></button>
            </div>
        </nav>

        <div class="mobile-menu">
            <ul>
            <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="cadastro/cadastro.php" class="nav-link">Cadastro</a></li>
                    <li class="nav-item"><a href="restrito/admin.php" class="nav-link">Admin</a></li>
            </ul>
        </div>
    </header>

    <div class="container-login">
        <div class="main-login">
            <div class="left-login">
                <p>Invista com</p>
                <h1>Liberty</h1>
                <image>
                    <img src="assets/css/index_style/investor6.svg" class="left-login-image" alt="Animação investidor">
                </image>
            </div>

            <div class="right-login">
                <form method="POST" action="php/process_login.php" class="card-login" id="form" onsubmit="valForm(this); return false;">
                    <h2>LOGIN</h2>
                    <div class="textfield">
                        <label for="usuario">E-mail</label>
                        <input type="email" name="email" id="email" class="required" maxlength="45" autocomplete="off" placeholder="E-mail">
                        <span class="span-required"></span>
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" class="required" maxlength="30" placeholder="Senha">
                        <span class="span-required"></span>
                    </div>
                    <p class="alert"><?= $msg ?></p>
                    <input type="submit" class="btn-login" value="Login">
                </form>
            </div>
        </div>
    </div>

    <footer>
        <div class="container-footer">
            <marquee behavior="" direction="">
                <p class="footer">| BOVESPA <span class="green">+2.890%</span> | NYSE <span class="red">-0.964%</span> | SSEC <span class="green">+1.780%</span> |</p>
            </marquee>
        </div>
    </footer>

    <script src="assets/js/login/form_login.js"></script>
    <script src="assets/js/navbar/main.js"></script>
</body>

</html>