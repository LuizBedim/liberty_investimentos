<?php
require_once("conecta.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

try {
    $stmt = $conn->prepare("SELECT * FROM `clientes` WHERE `email` = :email AND `senha` = :senha");
    $stmt->bindParam("email",$email);
    $stmt->bindParam("senha",$senha);
    $stmt->execute();

    $res = $stmt->fetchAll();

    // $sql = "SELECT * FROM `clientes` 
	// 	WHERE `email` = '$email' AND `senha` = '$senha'";

	// $res = $conn->query($sql)->fetchAll();

    if(count($res) > 0) {	
		foreach ($res as $row) {
			$id = $row['idcliente'];
		}
		if(!isset($_SESSION))
			session_start();
			$_SESSION["id_cliente"] = $id;
			header("Location:logado.php");
    }
    else {
        header("Location:index.php");
    }

} catch(PDOException $e) {
	$e->getMessage();
}

$conn = null;
$stmt = null;

?>