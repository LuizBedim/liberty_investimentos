<?php
require("conecta.php");

$id = $_GET["id"];

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$senha = $_POST["senha"];
$celular = $_POST["celular"];
$cep = $_POST["cep"];
$numero = $_POST["numero"];

try {

    $stmt = $conn->prepare("UPDATE `clientes` SET nome = :nome, sobrenome = :sobrenome, senha = :senha, celular = :celular, cep = :cep, numero = :numero WHERE idcliente = $id");
    $stmt->bindParam("nome",$nome);
    $stmt->bindParam("sobrenome",$sobrenome);
    $stmt->bindParam("senha",$senha);
    $stmt->bindParam("celular",$celular);
    $stmt->bindParam("cep",$cep);
    $stmt->bindParam("numero",$numero); 

    if ($stmt->execute()) {
        header("Location:logado.php");
    }

    echo $stmt->rowCount();
    

} catch (PDOException $e) {
    echo $e->getMessage();
}

$conn = null;

?>