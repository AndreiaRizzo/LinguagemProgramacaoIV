<?php

$numeros = $_POST['numeros'];
$multiplicador = $_POST['multiplicador'];

/*A função array_map em PHP é usada para aplicar uma determinada função a cada elemento de um array, 
e retorna um novo array contendo os resultados dessas operações.*/
$resultado = array_map(function($num) use ($multiplicador){
    return $num * $multiplicador;
}, $numeros);

echo "Resultados <br>";
echo "Resultado da multiplicaçõe: " . implode(", ", $resultado);


/* A função implode() é usada para juntar os elementos de um array em uma string, 
utilizando um separador especificado entre cada elemento. 
No caso, estamos usando ", " como separador para os elementos do array $resultado.*/
?>