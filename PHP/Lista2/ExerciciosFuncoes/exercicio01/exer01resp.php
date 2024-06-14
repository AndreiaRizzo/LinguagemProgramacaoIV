<?php
require_once "../cabecalho.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = $_POST['valor'];
    echo "<p>Resposta: " . positivoNegativo($valor) . "</p>";
}

require_once "../rodape.php";
