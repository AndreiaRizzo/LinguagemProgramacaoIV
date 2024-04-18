<?php
$numeros = $_POST['numeros'];

$negativos = 0;
$positivos = 0;
$pares = 0;
$impares = 0;

foreach ($numeros as $numero) {
    if ($numero < 0) {
        $negativos++;
    } elseif ($numero > 0) {
        $positivos++;
    }

    if ($numero % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}

echo "<h2>Resultados</h2>";
echo "Quantidade de números negativos: $negativos<br>";
echo "Quantidade de números positivos: $positivos<br>";
echo "Quantidade de números pares: $pares<br>";
echo "Quantidade de números ímpares: $impares<br>";
?>