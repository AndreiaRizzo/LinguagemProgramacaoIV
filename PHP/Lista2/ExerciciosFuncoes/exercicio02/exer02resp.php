<?php
require_once "../cabecalho.php";

if (isset($_POST['valor']) && is_array($_POST['valor'])) {
    $valores = $_POST['valor'];
    encontrarMenor($valores);
} else {
    echo "<p>Por favor, insira todos os valores.</p>";
}

require_once "../rodape.php";


?>
