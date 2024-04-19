<?php

function primo(int $numero): bool
{
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}
$numeros = $_POST['numeros'];
$primos = [];

foreach ($numeros as $numero) {
    if (primo($numero)) {
        $primos[] = $numero;
    }
}
 
echo "<h3>Números primos encontrados<h3>";
if (empty($primos)){
    echo"Nenhum número primo encontrado";
}else {
        echo implode(", ", $primos);
    }
