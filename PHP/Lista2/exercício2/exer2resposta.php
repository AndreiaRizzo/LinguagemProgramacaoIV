<?php

$menor = $_POST['valor1']; //variável criada para receber valor do arq exer1
$valor2 = $_POST['valor2'];
$valor3 = $_POST['valor3'];
$valor4 = $_POST['valor4'];
$valor5 = $_POST['valor5'];
$valor6 = $_POST['valor6'];
$valor7 = $_POST['valor7'];
$pos = "1º";

if ($menor > $valor2){
    $menor = $valor2;
    $pos = "2º";
}


if ($menor > $valor3){
    $menor = $valor3;
    $pos = "3º";
}

if ($menor > $valor4){
    $menor = $valor4;
    $pos = "4º";
}

if ($menor > $valor5){
    $menor = $valor5;
    $pos = "5º";
}

if ($menor > $valor6){
    $menor = $valor6;
    $pos = "6º";
}

if ($menor > $valor7){
    $menor = $valor7;
    $pos = "7º";
}
    echo "<p> $menor é o menor valor da relação e ocupa a $pos posição</p>";
   