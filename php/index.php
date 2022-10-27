<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style.css -->
    <link rel="stylesheet" type="text/css" href="../index-final/main.css">
    <!-- Icone da página -->
    <link rel="shortcut icon" href="../img/icon2.ico">
    <!-- Font-family KoHo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@200&display=swap" rel="stylesheet">
    <title>Liberty</title>
</head>
<body>
    
    <nav>
        <div class="container-nav">
            <h1>Liberty</h1>

        <div class="menu">
            <a href="#" class="is-active">Home</a>
            <a href="../cadastro/cadastro.php">Cadastro</a>
            <a href="../sobre-nos/index.html">Sobre Nós</a>
            <a href="../contato/contato.php">Contato</a>
        </div>

        <button class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </button>
        </div>
        
    </nav>

    <div class="container-login">
        <div class="main-login">
            <div class="left-login">
                <p>Invista com</p>
                <h1>Liberty</h1>
                <image>
                    <img src="../index-final/investor6.svg" class="left-login-image" alt="Animação investidor">
                </image>
            </div>

            <div class="right-login">
                <form method="POST" action="process_login.php" class="card-login">
                    <h2>LOGIN</h2>
                    <div class="textfield">
                        <label for="usuario">E-mail</label>
                        <input type="email" name="email" id="email" autocomplete="off" placeholder="E-mail">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Senha">
                    </div>
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


    <script src="main.js"></script>
</body>
</html>