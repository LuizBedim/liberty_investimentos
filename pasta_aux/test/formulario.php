<?php
if(!isset($nome))
	$nome = "";

if(!isset($senha))
	$senha = "";
?>

<label>
	Nome:<input type="text" name="nome" id="nome" value="<?= $nome ?>"><br>
</label>
<label>
	Senha:<input type="password" name="senha" id="senha" value="<?= $senha ?>"><br>
</label>
<input type="submit" value="Enviar">
<input type="reset" value="Limpar"><br>