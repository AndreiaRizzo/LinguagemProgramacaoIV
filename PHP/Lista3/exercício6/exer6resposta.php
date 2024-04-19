<?php
$produtos = $_POST['produtos'];
$precos = $_POST['precos'];

$produtosInferiores50 = 0;
$produtosEntre50e100 = [];
$somaPrecosSuperiores100 = 0;
$quantidadePrecosSuperiores100 = 0;

for ($i = 0; $i < count($produtos); $i++) {
    if ($precos[$i] < 50) {
        $produtosInferiores50++;
    } elseif ($precos[$i] >= 50 && $precos[$i] <= 100) {
        $produtosEntre50e100[] = $produtos[$i];
    } elseif ($precos[$i] > 100) {
        $somaPrecosSuperiores100 += $precos[$i];
        $quantidadePrecosSuperiores100++;
    }
}

echo "<h2>Resultados:</h2>";
echo "Quantidade de produtos com preço inferior a R$50,00: $produtosInferiores50<br>";
echo "Nomes dos produtos com preço entre R$50,00 e R$100,00: " . implode(", ", $produtosEntre50e100) . "<br>";

if ($quantidadePrecosSuperiores100 > 0) {
    $mediaPrecosSuperiores100 = $somaPrecosSuperiores100 / $quantidadePrecosSuperiores100;
    echo "Média dos preços dos produtos com preço superior a R$100,00: R$" . number_format($mediaPrecosSuperiores100, 2);
} else {
    echo "Não há produtos com preço superior a R$100,00.";
}
