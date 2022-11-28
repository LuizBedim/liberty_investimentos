<?php
include("verifica_restrito.php");
if (!isset($_SESSION))
    session_start();

require_once("../php/conecta.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style.css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/restrito_css/exibir_style.css">
    <!-- Icone da página -->
    <link rel="shortcut icon" href="../assets/img/icon2.ico">
    <!-- Font-family KoHo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@200&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Usuários</title>
</head>

<body>

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <header>
                    <nav class="nav-bar">
                        <div class="logo">
                            <h1>Liberty</h1>
                        </div>
                        <div class="nav-list">
                            <ul>
                                <li class="nav-item"><a href="sair.php" class="nav-link">Sair</a></li>
                            </ul>
                        </div>

                        <div class="mobile-menu-icon">
                            <button onclick="menuShow()"><img class="icon" src="../assets/img/menu_white_36dp.svg" alt="Menu"></button>
                        </div>
                    </nav>

                    <div class="mobile-menu">
                        <ul>
                        <li class="nav-item"><a href="sair.php" class="nav-link">Sair</a></li>
                        </ul>
                    </div>
                </header>
            </div> <!-- col-12 -->
        </div> <!-- row -->

        <div class="row image-container">

            <div class="col-1 col-sm-2"></div>
            <div class="col-10 col-sm-8">

                <div class="tabela">

                    <?php
                    try {
                        $stmt = $conn->prepare("SELECT idcliente, nome, sobrenome, email, celular FROM clientes");
                        $stmt->execute();

                        // set the resulting array to associative
                        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    ?>

                        <table class="content-table">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Sobrenome</th>
                                    <th>E-mail</th>
                                    <th>Celular</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php
                                foreach ($stmt->fetchAll() as $k => $v) {
                                ?>
                                    <tr>
                                        <td><?php echo "" . $v['nome'] . ""; ?></td>
                                        <td><?php echo "" . $v['sobrenome'] . ""; ?></td>
                                        <td><?php echo "" . $v['email'] . ""; ?></td>
                                        <td><?php echo "" . $v['celular'] . ""; ?></td>
                                        <td><a href='excluir.php?id=<?php echo "" . $v['idcliente'] . ""; ?>'>Excluir</a></td>
                                    </tr>
                                <?php
                                }
                                ?>

                            </tbody>

                        <?php
                    } catch (PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }
                    $conn = null;
                        ?>

                        </table>
                </div>
            </div>
            <div class="col-1 col-sm-2"></div>
        </div> <!-- row -->

    </div> <!-- container-fluid -->

    <script src="../assets/js/navbar/nav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>