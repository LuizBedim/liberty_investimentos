<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/restrito-css/admin_style.css">
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

    <div class="container-fluid image-container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 card-center">
                <form method="POST" action="process_login_restrito.php" class="card-login">
                    <h2>LOGIN-ADM</h2>
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" id="usuario" autocomplete="off" placeholder="Usuário">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Senha">
                    </div>
                    <input type="submit" class="btn-login" value="Login">
                </form>
            </div>
            <div class="col-4"></div>
        </div>

        <div class="row image-main">
            <div class="col-3"></div>
            <div class="col-6 center-main">
                <div class="card-contact">
                
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>

</body>
</html>