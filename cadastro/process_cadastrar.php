<?php
require_once("../php/conecta.php");

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

} catch (PDOException $e) {
    echo "Erro";
    $e->getMessage();
}

$conn = null;
$stmt = null;

?>