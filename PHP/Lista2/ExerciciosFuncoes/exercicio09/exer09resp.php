
<?php

require_once "../cabecalho.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $anoNasc = $_POST['anoNasc'];
    $resultado = calcularIdade($anoNasc);
    $idadeAtual = $resultado['idadeAtual'];
    $idade2025 = $resultado['idade2025'];
    $diasVividos = $resultado['diasVividos'];

    echo "<p>Atualmente você tem $idadeAtual anos.<br>
    Já viveu $diasVividos dias.<br>
    Terá $idade2025 anos em 2025.</p>";
}



require_once "../rodape.php";
