<?php

    function exibirData(){
        echo " Hoje é dia:  ".date("d");
    }

    function somar($n1, $n2){
        return $n1 + $n2;
    }

    function positivoNegativo($v){
        if($v > 0){
            return "Valor positivo!";
        } elseif($v < 0) {
            return "Valor Negativo!";
        } else {
            return "Igual a zero!";
        }
    }