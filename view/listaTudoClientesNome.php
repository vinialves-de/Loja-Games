<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoTodos.php");
?>
<div class="container m-5 p-5">
<form action="listaTudoClientesNome.php" method="POST">
    <div class="row mb-3">
        <label for="inputNome" class="col-sm-2 col-form-label">Digite o Nome do Cliente: </label>
        <div class="col-sm-3">
            <input type="text" name="nomeCli" class="form-control" id="inputNome" required>
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
            <th scope="col">CPF</th>
            <th scope="col">Telefone</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">Deletar</th>
            <th scope="col">Alterar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomeCli = isset($_POST['nomeCli'])?$_POST['nomeCli']:"";
        if($nomeCli!=""){
            $cliente = listaTudoClientesNome($conexao,$nomeCli);
            foreach($cliente as $clientes):
        ?>
        <tr>
            <th scope="row"><?=$clientes['codCli']?></th>
            <td><?=$clientes['codUsuFK']?></td>
            <td><?=$clientes['nomeCli']?></td>
            <td><?=$clientes['cpfCli']?></td>
            <td><?=$clientes['foneCli']?></td>
            <td><?=$clientes['datanasCli']?></td>
            <td>
                <form action="../controller/deletarClientes.php" method="POST">
                    <input type="hidden" name="codCliDeletar" value="<?=$clientes['codCli']?>">
                    <button type="submit" class="btn-small btn-danger">Deletar</button>
                </form>
            </td>
            <td>
                <form action="formAlterarClientes.php" method="POST">
                    <input type="hidden" name="codCliAlterar" value="<?=$clientes['codCli']?>">
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