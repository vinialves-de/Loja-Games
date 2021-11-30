<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoTodos.php");
?>
</br>
<style>
.container3 {
    margin: 0;
    background: yellow;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%)
}
</style>
<div class="container3">
<div class="card">
<div class="card-body">
<form method="POST" action="../controller/alterarUsuarios.php">
<?php 
$codUsu=$_POST['codUsuAlterar'];
$usuario=listaTudoUsuariosCod($conexao,$codUsu);
?>
    <p>Código <input type="text" name="codUsu" value="<?=$usuario['codUsu']?>" readonly></p>
    <p>Email <input type="text" name="emailUsu" value="<?=$usuario['emailUsu']?>"></p>
    <p>Senha <input type="password" name="senhaUsu" value="<?=$usuario['senhaUsu']?>"></p>
    <p>PIN <input type="number" name="pinUsu" value="<?=$usuario['pinUsu']?>"></p>
    <button type="submit" class="btn btn-dark">Salvar</button>
</form>
</div>
</div>
</div>
<?php
include_once("footer.php");
?>