<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoTodos.php");
?>
<div class="container m-5 p-5">
<form action="listaTudoFuncionariosNome.php" method="POST">
    <div class="row mb-3">
        <label for="inputNome" class="col-sm-2 col-form-label">Digite o Nome do Função: </label>
        <div class="col-sm-3">
            <input type="text" name="nomeFun" class="form-control" id="inputNome" required>
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
        $nomeFun = isset($_POST['nomeFun'])?$_POST['nomeFun']:"";
        if($nomeFun!=""){
            $funcionario = listaTudoFuncionariosNome($conexao,$nomeFun);
            foreach($funcionario as $funcionarios):
        ?>
        <tr>
            <th scope="row"><?=$funcionarios['codFun']?></th>
            <td><?=$funcionarios['codUsuFK']?></td>
            <td><?=$funcionarios['nomeFun']?></td>
            <td><?=$funcionarios['funcaoFun']?></td>
            <td><?=$funcionarios['foneFun']?></td>
            <td><?=$funcionarios['datanasFun']?></td>
            <td>
                <form action="../controller/deletarClientes.php" method="POST">
                    <input type="hidden" name="codFunDeletar" value="<?=$clientes['codCli']?>">
                    <button type="submit" class="btn-small btn-danger">Deletar</button>
                </form>
            </td>
            <td>
                <form action="formAlterarClientes.php" method="POST">
                    <input type="hidden" name="codFunAlterar" value="<?=$clientes['codCli']?>">
                    <button type="submit" class="btn-small btn-success">Alterar</button>
                </form>
            </td>
        </tr>
        <?php
        endforeach;
    }
        ?>
    </tbody>
    </table>
<?php
include_once("footer.php");
?>