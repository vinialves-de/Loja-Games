<?php
include_once("header.php");
?>
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
<form method="POST" action="../controller/inserirFuncionarios.php">
    <p>Código do Usuário <input type="number" name="codUsuFK"></p>
    <p>Nome <input type="text" name="nomeFun"></p>
    <p>Função <input type="text" name="funcaoFun"></p>
    <p>Telefone <input type="text" name="foneFun"></p>
    <p>Data de Nascimento <input type="date" name="datanasFun"></p>
    <button type="submit" class="btn btn-dark">Salvar</button>
</form>
</div>
</div>
</div>
<?php
include_once("footer.php");
?>