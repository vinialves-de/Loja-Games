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
<form method="POST" action="../controller/alterarClientes.php">
<?php 
$codCli=$_POST['codCliAlterar'];
$cliente=listaTudoClientesCod($conexao,$codCli);
$codUsu=$cliente['codUsuFK'];
$usuario=listaClienteUsuario($conexao,$codUsu);
?>
    <p>Código <input type="number" name="codCli" value="<?=$cliente['codCli']?>" readonly></p>
    <p>Código do Usuário <input type="number" name="codUsuFK" value="<?=$cliente['codUsuFK']?>" readonly></p>
    <p>Email <input type= "text" name="emailUsu" value="<?=$usuario['emailUsu']?>" readonly></p>
    <p>Nome <input type="text" name="nomeCli" value="<?=$cliente['nomeCli']?>"></p>
    <p>CPF <input type="text" name="cpfCli" value="<?=$cliente['cpfCli']?>"></p>
    <p>Telefone <input type="text" name="foneCli" value="<?=$cliente['foneCli']?>"></p>
    <p>Data de Nascimento <input type="date" name="datanasCli" value="<?=$cliente['datanasCli']?>"></p>
    <button type="submit" class="btn btn-dark">Salvar</button>
</form>
</div>
</div>
</div>
<?php
include_once("footer.php");
?>