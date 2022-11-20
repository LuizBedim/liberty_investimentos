<?php
include("verifica_restrito.php");
if(!isset($_SESSION))
    session_start();

require_once("../php/conecta.php");

$id = $_GET["id"];

try {
  $stmt = $conn->prepare("DELETE FROM clientes WHERE idcliente=$id"); 
  $stmt->execute();
  header("Location:exibir_usuarios.php");
} catch(PDOException $e) {
  echo $e->getMessage();
}

$conn = null;

?>
