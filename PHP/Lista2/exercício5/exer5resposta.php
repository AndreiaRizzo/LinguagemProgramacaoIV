<?php

$numero = $_POST['numero'];
$resultado = 1;
for ($i=1; $i< $numero+1 ; $i++){
    $resultado *= $i;
}
echo "f
Fatorial de $numero é $resultado.";