<?php
require_once("../php/conecta.php");

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

try {
    $stmt = $conn->prepare("SELECT * FROM `super_usuarios` WHERE `usuario` = :usuario AND `senha` = :senha");
    $stmt->bindParam("usuario",$usuario);
    $stmt->bindParam("senha",$senha);
    $stmt->execute();

    $res = $stmt->fetchAll();

    // $sql = "SELECT * FROM `clientes` 
	// 	WHERE `email` = '$email' AND `senha` = '$senha'";

	// $res = $conn->query($sql)->fetchAll();

    if(count($res) > 0) {	
		foreach ($res as $row) {
			$id = $row['idsuper'];
		}
		if(!isset($_SESSION))
			session_start();
			$_SESSION["id_super"] = $id;
			header("Location:exibir_usuarios.php");
    }
    else {
        header("Location:admin.php?msg=Usuário ou senha incorretos");
    }

} catch(PDOException $e) {
	$e->getMessage();
}

$conn = null;
$stmt = null;

?>