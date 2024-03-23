<?php

    //$nome = $_POST['nome']; 
    //echo 'Seja bem vindo' .$nome; //poderia ter escrito assim: echo "Seja bem vindo $nome"
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $soma = $valor1 + $valor2;
    $sub = $valor1 - $valor2;
    $mult = $valor1 * $valor2;
    $div =  $valor1 / $valor2;
    echo "<p> Soma: $soma</p>";
    echo "<p> Subtração: $sub</p>";
    echo "<p> Multiplicação: $mult</p>";
    echo "<p> Divisão: $div</p>";
    if ($soma > 0){
        echo "Soma maior que zero!";
    }elseif ($soma < 0){
        echo "Soma menor que zero";
    }else{
        echo "Soma igual a zero";
    }
    if($sub ==0)
        echo "Igual a zero";
    else 
    echo "Diferente de 0";

    echo $sub == 0 ? "Igual a 0" : "Diferente de 0";


