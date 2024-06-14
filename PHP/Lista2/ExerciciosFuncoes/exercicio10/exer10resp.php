<?php
require_once "../cabecalho.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $imc = calcularImc($peso, $altura);

    echo "Seu IMC é: $imc <br><br>";
    echo " Tabela de referência do IMC <br>
    Menor que 18,5: Magreza <br>
    18,5 a 24,9: Normal <br>
    25 a 29,9: Sobrepeso <br>
    30 a 34,9: Obesidade grau I <br>
    35 a 39,9: Obesidade grau II <br>
    Maior que 40: Obesidade grau III <br><br>";

    if ($imc < 18.5) {
        echo "Você está abaixo do peso.<br>";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        echo "Seu peso está normal.";
    } elseif ($imc >= 24.9 && $imc < 29.9) {
        echo "Você está com sobrepeso.";
    } else {
        echo "Você está obeso.";
    }
}

require_once "../rodape.php";
