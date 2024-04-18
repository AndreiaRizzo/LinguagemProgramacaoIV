<?php

$numero = $_POST['numero'];

for ($i=0; $i<10; $i++){
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado <br>";
}