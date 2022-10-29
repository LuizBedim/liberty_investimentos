<?php
include("verifica_restrito.php");
if(!isset($_SESSION))
    session_start();

require_once("../php/conecta.php");

$id = $_GET["id"];

try {
  $stmt = $conn->prepare("DELETE FROM clientes WHERE idcliente=$id"); 
  $stmt->execute();
  echo "Registro excluído com sucesso!<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>
<a href="exibir_usuarios.php">Ver usuários cadastrados</a>