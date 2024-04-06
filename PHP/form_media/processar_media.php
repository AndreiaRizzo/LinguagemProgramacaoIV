<?php

$n1 = $_POST['n1'];
$n1 = $_POST['n2'];
$n1 = $_POST['n3'];
$n1 = $_POST['n4'];
$faltas = $_POST['faltas'];
$media = ($n1 + $n2 + $n3 + $n4) / 4;
if ($media >=6 ) && ($faltas < 10) {
    echo "Aprovado!";
}else{
    echo "Reprovado";
}