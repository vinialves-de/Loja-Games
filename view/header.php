<?php
if( session_status() !== PHP_SESSION_ACTIVE )
{
  session_start();
}

if(!$_SESSION["emailUsu"]){
  $_SESSION["msg"]="<div class='alert alert-danger' role='alert'>Você não tem acesso... tente novamente.</div>";
  header("Location:../view/logar.php");
}
?>
<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Jogos Online</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../view/index.php">Jogos Online</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Usuários
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../view/cadastroUsuarios.php">Cadastro</a></li>
                                <li><a class="dropdown-item" href="../view/listaTudoUsuarios.php">Visualizar</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="../view/listaTudoUsuariosCod.php">Buscar por Código</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Jogos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../view/cadastroJogos.php">Cadastro</a></li>
                                <li><a class="dropdown-item" href="../view/listaTudoJogos.php">Visualizar</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="../view/listaTudoJogosCod.php">Buscar por Código</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Clientes
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../view/cadastroClientes.php">Cadastro</a></li>
                                <li><a class="dropdown-item" href="../view/listaTudoClientes.php">Visualizar</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="../view/listaTudoClientesCod.php">Buscar por Código</a></li>
                                <li><a class="dropdown-item" href="../view/listaTudoClientesNome.php">Buscar por Nome</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Funcionários
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../view/cadastroFuncionarios.php">Cadastro</a></li>
                                <li><a class="dropdown-item" href="../view/listaTudoFuncionarios.php">Visualizar</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="../view/listaTudoFuncionariosCod.php">Buscar por Código</a></li>
                                <li><a class="dropdown-item" href="../view/listaTudoFuncionariosNome.php">Buscar por Nome</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pedidos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../view/cadastroPedidos.php">Cadastro</a></li>
                                <li><a class="dropdown-item" href="#">Visualizar</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Buscar por Código</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" action="../controller/sair.php">
                        <button class="btn btn-outline-light" type="submit">Sair</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="container">