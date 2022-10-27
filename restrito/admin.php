<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
</body>

</html>