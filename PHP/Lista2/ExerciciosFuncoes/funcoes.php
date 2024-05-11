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

    function menor($m, $valor2, $valor3, $valor4, $valor5, $valor6, $valor7, $pos){
        if ($m > $valor2){
            $m = $valor2;
            $pos = "2º";
        }
        
        
        if ($m > $valor3){
            $m = $valor3;
            $pos = "3º";
        }
        
        if ($m > $valor4){
            $m = $valor4;
            $pos = "4º";
        }
        
        if ($m > $valor5){
            $m = $valor5;
            $pos = "5º";
        }
        
        if ($m > $valor6){
            $m = $valor6;
            $pos = "6º";
        }
        
        if ($m > $valor7){
            $m = $valor7;
            $pos = "7º";
        }
        return "<p> $m é o menor valor da relação e ocupa a $pos posição</p>";
        

    }