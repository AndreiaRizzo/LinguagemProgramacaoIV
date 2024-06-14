<?php

require_once "../cabecalho.php";

$valor = $_POST['valor'];


echo "<p>O fatorial de $valor é: <br> " . encontrarFatorial($valor) . "</p>";


require_once "../rodape.php";
