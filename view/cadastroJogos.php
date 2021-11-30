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
<form method="POST" action="../controller/inserirJogos.php">
    <p>Jogo <input type="text" name="jogo"></p>
    <p>Tamanho do Jogo <input type="text" name="tamanho"></p>
    <p>Preço do Jogo <input type="text" name="preco"></p>
    <p>Requisitos do Jogo <input type="text" name="requisitos"></p>
    <p>Plataformas <input type="text" name="plataforma"></p>
    <p>Classificação <input type="text" name="classificacao"></p>
    <p>Avaliação <input type="text" name="avaliacao"></p>
    <button type="submit" class="btn btn-dark">Salvar</button>
</form>
</div>
</div>
</div>
<?php
include_once("footer.php");
?>