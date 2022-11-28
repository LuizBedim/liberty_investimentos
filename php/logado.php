<?php
include("verifica.php");
require("conecta.php");

$id = $nome = $sobrenome = $email = $senha = $cpf = $celular = $cep = $numero = "";

if (!isset($_SESSION))
    session_start();

$id = $_SESSION["id_cliente"];

try {

    $stmt = $conn->prepare("SELECT nome, sobrenome, senha, celular, cep, numero FROM clientes WHERE idcliente = $id");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach ($stmt->fetchAll() as $k => $v) {
        $nome = $v['nome'];
        $sobrenome = $v['sobrenome'];
        $senha = $v['senha'];
        $celular = $v['celular'];
        $cep = $v['cep'];
        $numero = $v['numero'];
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

$conn = null;
?>

<?php
if (!isset($nome))
    $nome = "";

if (!isset($sobrenome))
    $sobrenome = "";

if (!isset($senha))
    $senha = "";

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
    <link rel="stylesheet" href="../assets/css/main_css/style_logado.css">
    <!-- Icone da página -->
    <link rel="shortcut icon" href="../assets/img/icon2.ico">
    <!-- Font-family KoHo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@200&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Logado</title>
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
                    </nav>
                </header>
            </div> <!-- col-12 col-sm-12 -->
        </div> <!-- row -->

        <div class="row image-container">
            <div class="col-1 col-sm-4"></div>
            <div class="col-10 col-sm-4 card-center">
                <form action="process_atualizar.php?id=<?= $id ?>" method="POST" class="card-cadastro" onsubmit="valForm(this); return false;">
                    <h2>Dados Pessoais</h2>
                    <div class="textfield">
                        <label name="nome">Nome:</label>
                        <input type="text" name="nome" id="nome" placeholder="Nome" class="required" value="<?= $nome ?>">
                        <span class="span-required"></span>
                    </div>
                    <div class="textfield">
                        <label name="sobrenome">Sobrenome:</label>
                        <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" class="required" value="<?= $sobrenome ?>">
                        <span class="span-required"></span>
                    </div>
                    <div class="textfield">
                        <label name="senha">Senha:</label>
                        <input type="password" name="senha" id="senha" placeholder="Senha" class="required" value="<?= $senha ?>">
                        <span class="span-required"></span>
                    </div>
                    <div class="textfield">
                        <label name="celular">Celular:</label>
                        <input type="text" name="celular" id="celular" autocomplete="off" maxlength="14" placeholder="(00)00000-0000" class="required" value="<?= $celular ?>">
                        <span class="span-required"></span>                   
                    </div>
                    <div class="textfield">
                        <label name="cep">Cep:</label>
                        <input type="text" name="cep" id="cep" maxlength="9" placeholder="00000-000" class="required" value="<?= $cep ?>">
                        <span class="span-required"></span>
                    </div>
                    <div class="textfield">
                        <label name="numero">Número:</label>
                        <input type="text" name="numero" id="numero" placeholder="000" class="required" value="<?= $numero ?>">
                        <span class="span-required"></span>
                    </div>
                    <input type="submit" class="btn-form" value="Modificar">
                    <a href="sair.php" class="btn-form">Sair</a>
                </form>

            </div> <!--  col-10 col-sm-6 -->
            <div class="col-1 col-sm-4"></div>
        </div> <!-- row -->

    </div><!-- container-fluid -->

    <script src="../assets/js/cadastro/mask.js"></script>
    <script src="../assets/js/logado/logado_form.js"></script>
    <script src="../assets/js/navbar/nav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>