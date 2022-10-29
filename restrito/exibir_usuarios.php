<?php
include("verifica_restrito.php");
if(!isset($_SESSION))
    session_start();

require_once("../php/conecta.php");

try {
  $stmt = $conn->prepare("SELECT idcliente, nome, sobrenome, email, celular FROM clientes"); 
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

  foreach($stmt->fetchAll() as $k=>$v) { 
 
    echo("<p>Nome: ".$v['nome'].", Sobrenome: ".$v['sobrenome'].", E-mail: ".$v['email'].", Celular: ".$v['celular'].", <a href='excluir.php?id=".$v['idcliente']."'>Excluir</a></p>");
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>