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
    <title>Document</title>
</head>
<body>
    <h1>Logado como super usuário</h1>
    <a href="exibir_usuarios.php">Exibir usuários</a><br>
    <a href="sair.php">Sair</a>
</body>
</html>