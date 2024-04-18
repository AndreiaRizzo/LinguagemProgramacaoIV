<?php

$valorA = $_POST['valorA'];
$valorB = $_POST['valorB'];

if ($valorA > $valorB) {
    echo " $valorB - $valorA";
}

if ($valorB > $valorA) {
    echo "$valorA - $valorB";
}

if ($valorA == $valorB) {
    echo "Números iguais: $valorA";
}
