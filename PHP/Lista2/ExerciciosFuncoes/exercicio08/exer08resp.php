
<?php

require_once "../cabecalho.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $area = $_POST['area'];
    $resultado = calcularCusto($area);
    $latas = $resultado['latas'];
    $precoTotal = $resultado['precoTotal'];

    echo "<p>A quantidade de lata(s) de tinta necessária(s) é de: $latas latas e o preço total gasto é de : R$ $precoTotal</p>";
}


require_once "../rodape.php";
