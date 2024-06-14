<?php

require_once "../cabecalho.php";

$valor = $_POST['valor'];

echo "<p>A conversão em cm para $valor metros é de: <br> " . converterCentimetros($valor) . " centimetros</p>";


require_once "../rodape.php";
