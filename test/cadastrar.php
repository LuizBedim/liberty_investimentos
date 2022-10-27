<?php
$msg = "";
if(isset($_GET["msg"]))
	$msg = $_GET["msg"];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário</title>
</head>
<body>
	<h1>Cadastrar novo usuário</h1>
	<form action="process_cadastrar.php" method="POST">
		<?php include("formulario.php"); ?>
	</form>
	<?= $msg ?>
	<a href="index.php">Voltar</a>
</body>
</html>