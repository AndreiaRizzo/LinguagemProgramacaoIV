<?php
    require_once "../cabecalho.php";

    $m = $_POST['valor1']; //variável criada para receber valor do arq exer1
    $valor2 = $_POST['valor2'];
    $valor3 = $_POST['valor3'];
    $valor4 = $_POST['valor4'];
    $valor5 = $_POST['valor5'];
    $valor6 = $_POST['valor6'];
    $valor7 = $_POST['valor7'];
    $pos = "1º";

    echo "<p>Resposta: ".menor($m, $valor2, $valor3, $valor4, $valor5, $valor6, $valor7, $pos)."</p>";

    require_once "../rodape.php";
