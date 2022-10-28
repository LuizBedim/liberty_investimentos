<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Admin</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <form method="POST" action="process_login_restrito.php" class="card-login">
                    <h2>LOGIN</h2>
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
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>

</body>
</html>