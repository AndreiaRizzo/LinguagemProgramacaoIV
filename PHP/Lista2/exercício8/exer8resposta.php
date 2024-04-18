<?php

$area = $_POST['area'];
$qdadeLatas =ceil(number_format(( ($area / 3) / 18),2));
$valor = number_format(($qdadeLatas * 80),2);



echo ("O cliente terá que comprar $qdadeLatas latas de tintas.<br>");
echo (" Pagará o valor de $valor reais.");