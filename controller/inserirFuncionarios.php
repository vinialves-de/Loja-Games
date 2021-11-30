<?php
include("../model/conexao.php");
include("../model/bancoTodos.php");
include("../view/header.php");
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
<?php
extract($_REQUEST,EXTR_OVERWRITE);
if(inserirFuncionarios($conexao,$codUsuFK,$nomeFun,$funcaoFun,$foneFun,$datanasFun)){
    echo("Funcionário cadastrado com sucesso.");
}else{
    echo("Funcionário não cadastrado.");
}
?>
</div>
</div>
</div>
<?php
include("../view/footer.php");
?>