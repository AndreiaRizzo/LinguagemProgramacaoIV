<?php

$numero = $_POST['numero'];
$meses = [
    1 => "Janeiro",
    2 => "Fevereiro",
    3 => "Março",
    4 => "Abril",
    5 => "Maio",
    6 => "Junho",
    7 => "Julho",
    8 => "Agosto",
    9 => "Setembro",
    10 => "Outubro",
    11 => "Novembro",
    12 => "Dezembro"
];

if ( $numero >=1 && $numero <=12 ){
    echo "O mês correspondente ao número $numero é: {$meses[$numero]}";

} else{
    echo "Digite um número válido.";
}