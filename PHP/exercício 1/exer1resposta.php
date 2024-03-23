<?php
$valor = $_POST['valor']; //variável criada para receber valor do arq exer1
if ($valor > 0)
    echo "Valor positivo!";
elseif ($valor < 0)
    echo "Valor negativo!";
else
    echo "Valor igual a zero!";
