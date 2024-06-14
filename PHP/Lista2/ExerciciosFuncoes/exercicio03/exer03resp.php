<?php

require_once "../cabecalho.php";

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];

echo "<p>Resposta: " . encontrarTriplo($valor1, $valor2) . "</p>";





require_once "../rodape.php";
