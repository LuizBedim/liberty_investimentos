<?php
if(!isset($nome))
	$nome = "";

if(!isset($sobrenome))
	$sobrenome = "";

if(!isset($email)) {
    $email = "";
    $auxe = "";
} else {
    $auxe = "disabled";
}
    
if(!isset($senha))
	$senha = "";

if(!isset($cpf)) {
    $cpf = "";
    $auxf = "";
} else {
    $auxf = "disabled";
}
    
if(!isset($celular))
	$celular = "";

if(!isset($cep))
	$cep = "";

if(!isset($numero))
	$numero = "";
?>

<label>
    Nome:<input type="text" name="nome" id="nome" placeholder="Nome" value="<?= $nome ?>"><br>
</label>
            
<label>
    Sobrenome:<input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" value="<?= $sobrenome ?>"><br>
</label>
            
<label>
    E-mail:<input type="email" name="email" id="email" placeholder="Email" value="<?= $email ?>" <?= $auxe ?>><br>
</label>
            
<label>
    Senha:<input type="password" name="senha" id="senha" placeholder="Senha" value="<?= $senha ?>"><br>
</label>

<label>
    Cpf:<input type="text" name="cpf" id="cpf" autocomplete="off" maxlength="14" placeholder="000.000.000-00" value="<?= $cpf ?>" <?= $auxf ?>><br>
</label>
            
<label>
    Celular:<input type="text" name="celular" id="celular" autocomplete="off" maxlength="14" placeholder="(00)00000-0000" value="<?= $celular ?>"><br>
</label>
            
<label>
    Cep:<input type="text" name="cep" id="cep" maxlength="9" placeholder="00000-000" value="<?= $cep ?>"><br>
</label>
            
<label>
    Número<input type="text" name="numero" id="numero" placeholder="000" value="<?= $numero ?>"><br>
</label>
                    
<input type="submit" value="Enviar">
<input type="reset" value="Limpar">