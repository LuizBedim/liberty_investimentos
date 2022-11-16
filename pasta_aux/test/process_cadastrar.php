<?php
require_once("conecta.php");

$nome = $_POST["nome"];
$senha = $_POST["senha"];

try {

	$stmt = $conn->prepare("INSERT INTO `tabela` (`id`, `nome`, `senha`) VALUES (NULL, :nome, :senha);");
	$stmt->bindParam("nome",$nome);
	$stmt->bindParam("senha",$senha);
	
	if($stmt->execute()){
		header("Location:certo.php");
	}
	else{
		header("Location:formulario.php?msg=Erro na inclusão do usuário!");
	}

} catch(PDOException $e) {
	$e->getMessage();
}

$conn = null;
$stmt = null;
?>