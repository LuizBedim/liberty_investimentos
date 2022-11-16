<?php
if (!isset($nome))
    $nome = "";

if (!isset($sobrenome))
    $sobrenome = "";

if (!isset($_GET["email"])) {
    $email = "";
    $auxe = "";
} else {
    $auxe = "disabled";
}

if (!isset($senha))
    $senha = "";

if (!isset($_GET["cpf"])) {
    $cpf = "";
    $auxf = "";
} else {
    $auxf = "disabled";
}

if (!isset($celular))
    $celular = "";

if (!isset($cep))
    $cep = "";

if (!isset($numero))
    $numero = "";
?>

<div class="textfield">
    <label>
        Nome:<input type="text" name="nome" id="nome" placeholder="Nome" value="<?= $nome ?>"><br>
    </label>
</div>

<div class="textfield">
    <label>
        Sobrenome:<input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" value="<?= $sobrenome ?>"><br>
    </label>
</div>

<div class="textfield">
    <label>
        E-mail:<input type="email" name="email" id="email" placeholder="Email" value="<?= $email ?>" <?= $auxe ?>><br>
    </label>
</div>

<div class="textfield">
    <label>
        Senha:<input type="password" name="senha" id="senha" placeholder="Senha" value="<?= $senha ?>"><br>
    </label>
</div>

<div class="textfield">
    <label>
        Cpf:<input type="text" name="cpf" id="cpf" autocomplete="off" maxlength="14" placeholder="000.000.000-00" value="<?= $cpf ?>" <?= $auxf ?>><br>
    </label>
</div>

<div class="textfield">
    <label>
        Celular:<input type="text" name="celular" id="celular" autocomplete="off" maxlength="14" placeholder="(00)00000-0000" value="<?= $celular ?>"><br>
    </label>
</div>

<div class="textfield">
    <label>
        Cep:<input type="text" name="cep" id="cep" maxlength="9" placeholder="00000-000" value="<?= $cep ?>"><br>
    </label>
</div>

<div class="textfield">
    <label>
        Número<input type="text" name="numero" id="numero" placeholder="000" value="<?= $numero ?>"><br>
    </label>
</div>


<input type="submit" value="Enviar">
<input type="reset" value="Limpar">