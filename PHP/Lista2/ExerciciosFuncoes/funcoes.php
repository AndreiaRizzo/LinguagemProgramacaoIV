<?php
function exibirData()
{
    echo "Hoje é dia " . date("d");
}



function positivoNegativo($valor)
{
    if ($valor > 0) {
        return "Valor positivo!";
    } elseif ($valor < 0) {
        return "Valor Negativo!";
    } else {
        return "Igual a Zero!";
    }
}

function encontrarMenor($valores)
{
    $menor = $valores[0];
    $pos = 1;

    foreach ($valores as $index => $valor) {
        if ($valor < $menor) {
            $menor = $valor;
            $pos = $index + 1;
        }
    }

    echo "<p> $menor é o menor valor da relação e ocupa a posição $pos.</p>";
}


function encontrarTriplo($valor1, $valor2)
{

    if ($valor1 == $valor2) {
        $triple = $valor1 * 3;
        return "O resultado é $triple";
    } else {
        $soma = $valor1 + $valor2;
        return "O resultado é $soma";
    }
}

function mostrarTabuada($valor)
{
    $tabuada = "";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $valor * $i;
        $tabuada .= "$valor x $i = $resultado <br>";
    }
    return $tabuada;
}


function encontrarFatorial($valor)
{
    $resultado = 1;
    for ($i = 1; $i < $valor + 1; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}



function encontrarIguais($valor1, $valor2)
{
    $resultado = "";
    if ($valor1 > $valor2) {
        $resultado =  $valor2 . "," . $valor1;
    } elseif ($valor2 > $valor1) {
        $resultado = $valor1 . "," . $valor2;
    } else {
        $resultado = $valor1;
    }
    return $resultado;
}

function converterCentimetros($valor)
{
    $centimetro = $valor * 100;
    return $centimetro;
}

function calcularCusto($area)
{
    $tintaLitro = $area / 3;
    $latas = ceil($tintaLitro / 18);
    $precoTotal = $latas * 80;
    return ["latas" => $latas, "precoTotal" => $precoTotal];
}

function calcularIdade($anoNasc)
{
    $anoAtual = date('Y');
    $idadeAtual = $anoAtual - $anoNasc;
    $idade2025 = 2025 - $anoNasc;
    $diasVividos = $idadeAtual * 365;

    return [
        'idadeAtual' => $idadeAtual,
        'idade2025' => $idade2025,
        'diasVividos' => $diasVividos
    ];
}

function calcularImc($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    return round($imc, 2);
}
