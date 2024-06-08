<?php
require_once("../cabecalho.php");
require_once("../style.html");
?>

<h1>ESCOLHA A OPÇÃO DESEJADA</h1>

<div class="container mt-3">
    <a href="inserir_aluno.php" class="btn btn-primary mt-3">CADASTRAR ALUNO </a>
</div>

<div class="container mt-3">
    <a href="cursos_oferecidos.php" class="btn btn-primary mt-3">LISTA DE ESPERA CURSOS OFERECIDOS </a>
    <a href="cursos_novos.php" class="btn btn-primary mt-3">LISTA DE ESPERA CURSOS NOVOS </a>
</div>

<div class="container mt-3">
    <a href="alterar_aluno.php" class="btn btn-primary mt-3">ALTERAR CADASTRO </a>
    <a href="excluir_aluno.php" class="btn btn-primary mt-3">EXCLUIR CADASTRO </a>
    <a href="concluir_matricula.php" class="btn btn-primary mt-3">CONCLUIR MATRÍCULA </a>
</div>


<?php
require_once("../rodape.php");
?>