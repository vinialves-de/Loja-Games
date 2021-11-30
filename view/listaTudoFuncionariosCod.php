<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoTodos.php");
?>
<div class="container m-5 p-5">
<form action="listaTudoFuncionariosCod.php" method="POST">
    <div class="row mb-3">
        <label for="inputCod" class="col-sm-2 col-form-label">Digite o Código do Funcionário: </label>
        <div class="col-sm-3">
            <input type="number" name="codFun" class="form-control" id="inputCod" required>
        </div>
        <div class="col-sm-3">
            <button type="submit" class="btn btn-dark">Buscar</button>
        </div>
    </div>
</form>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Código do Usuário</th>
            <th scope="col">Nome</th>
            <th scope="col">Função</th>
            <th scope="col">Telefone</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">Deletar</th>
            <th scope="col">Alterar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $codFun = isset($_POST['codFun'])?$_POST['codFun']:"0";
        if($codFun>0){
            $funcionarios = listaTudoFuncionariosCod($conexao,$codFun);
            if($funcionarios){
        ?>
        <tr>
            <th scope="row"><?=$funcionarios['codFun']?></th>
            <td><?=$funcionarios['codUsuFK']?></td>
            <td><?=$funcionarios['nomeFun']?></td>
            <td><?=$funcionarios['funcaoFun']?></td>
            <td><?=$funcionarios['foneFun']?></td>
            <td><?=$funcionarios['datanasFun']?></td>
            <td>
                <form action="../controller/deletarFuncionarios.php" method="POST">
                    <input type="hidden" name="codFunDeletar" value="<?=$funcionarios['codFun']?>">
                    <button type="submit" class="btn-small btn-danger">Deletar</button>
                </form>
            </td>
            <td>
                <form action="formAlterarFuncionarios.php" method="POST">
                    <input type="hidden" name="codFunAlterar" value="<?=$funcionarios['codFun']?>">
                    <button type="submit" class="btn-small btn-success">Alterar</button>
                </form>
            </td>
        </tr>
        <?php
        }
    }
        ?>
    </tbody>
    </table>
<?php
include_once("footer.php");
?>