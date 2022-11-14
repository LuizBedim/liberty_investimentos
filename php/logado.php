<?php
include("verifica.php");
require("conecta.php");

$id = $nome = $sobrenome = $email = $senha = $cpf = $celular = $cep = $numero = "";

if (!isset($_SESSION))
    session_start();

$id = $_SESSION["id_cliente"];

try {

    $stmt = $conn->prepare("SELECT nome, sobrenome, email, senha, cpf, celular, cep, numero FROM clientes WHERE idcliente = $id");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach ($stmt->fetchAll() as $k=>$v) {
        $nome = $v['nome'];
        $sobrenome = $v['sobrenome'];
        $email = $v['email'];
        $senha = $v['senha'];
        $cpf = $v['cpf'];
        $celular = $v['celular'];
        $cep = $v['cep'];
        $numero = $v['numero'];
    }
} catch (PDOException $e) {
    echo 'Error: '.$e->getMessage();
}

$conn = null;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style.css -->
    <link rel="stylesheet" href="../css/main-css/logado_style.css">
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

    <nav>
        <div class="container-nav">
            <h1>Liberty</h1>

            <div class="menu">
                <a href="../em_desenvolvimento/acoes.php">Ações</a>
                <a href="../em_desenvolvimento/mercado.php">Mercado</a>
                <a href="../em_desenvolvimento/live.php">Live</a>
                <a href="#" class="is-active">Minha conta</a>
            </div>

            <button class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

    </nav>

    <div class="main">
        <form action="process_atualizar.php?id=<?= $id ?>" method="POST">
        <?php include("formulario.php"); ?>
 </form>
        <a href="sair.php">Sair</a>
    </div>
</body>

</html>