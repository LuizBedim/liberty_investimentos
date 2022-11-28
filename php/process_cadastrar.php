<?php
require_once("conecta.php");

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$cpf = $_POST["cpf"];
$celular = $_POST["celular"];
$cep = $_POST["cep"];
$numero = $_POST["numero"]; 

try {

    $stmt = $conn->prepare("INSERT INTO `clientes` (`idcliente`, `nome`, `sobrenome`, `email`, `senha`, `cpf`, `celular`, `cep`, `numero`) VALUES (NULL, :nome, :sobrenome, :email, :senha, :cpf, :celular, :cep, :numero);");
    $stmt->bindParam("nome",$nome);
    $stmt->bindParam("sobrenome",$sobrenome);
    $stmt->bindParam("email",$email);
    $stmt->bindParam("senha",$senha);
    $stmt->bindParam("cpf",$cpf);
    $stmt->bindParam("celular",$celular);
    $stmt->bindParam("cep",$cep);
    $stmt->bindParam("numero",$numero); 

    if($stmt->execute()) {
        header("Location:../index.php");
    }
    else {
        header("Location:cadastro.php?msg=Erro na inclusão do usuário");
    }

} catch (PDOException $e) {
    header("Location:../cadastro/cadastro.php?msg=Email já cadastrados!");
    $e->getMessage();
}

$conn = null;
$stmt = null;

?>

<!-- try {

$stmt = $conn->prepare('SELECT * FROM `clientes` WHERE `email` = :email AND `cpf` = :cpf AND `celular` = :celular');
$stmt->bindParam('email', $email);
$stmt->bindParam('cpf', $cpf);
$stmt->bindParam('celular', $celular);
$stmt->execute();
$res = $stmt->fetchAll();

} catch (PDOException $e) {
echo "Error: Conection failed" . $e->getMessage();
}

if (count($res) > 0) {
header('Location:../erro.html');
} else {

try {

    $stmt = $conn->prepare("INSERT INTO `clientes` (`idcliente`, `nome`, `sobrenome`, `email`, `senha`, `cpf`, `celular`, `cep`, `numero`) VALUES (NULL, :nome, :sobrenome, :email, :senha, :cpf, :celular, :cep, :numero);");
    $stmt->bindParam("nome",$nome);
    $stmt->bindParam("sobrenome",$sobrenome);
    $stmt->bindParam("email",$email);
    $stmt->bindParam("senha",$senha);
    $stmt->bindParam("cpf",$cpf);
    $stmt->bindParam("celular",$celular);
    $stmt->bindParam("cep",$cep);
    $stmt->bindParam("numero",$numero); 

    if($stmt->execute()) {
        header("Location:../index.php");
    }
    else {
        header("Location:cadastro.php?msg=Erro na inclusão do usuário");
    }

} catch (PDOException $e) {
    echo "Erro";
    $e->getMessage();
}
} -->