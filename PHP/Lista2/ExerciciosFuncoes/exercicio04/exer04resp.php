<?php

require_once "../cabecalho.php";

$valor = $_POST['valor'];

echo "<p>Resposta:<br> " . mostrarTabuada($valor) . "</p>";


require_once "../rodape.php";
