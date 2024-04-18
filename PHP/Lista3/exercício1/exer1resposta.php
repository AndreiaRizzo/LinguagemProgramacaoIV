<?php

$alunos = $_POST['aluno'];
$notas = $_POST['nota'];
$media = number_format(array_sum($notas) / count($notas),2);

$maiorNota = max($notas);
$indiceMaNota = array_search($maiorNota, $notas); /*usado para buscar por um determinado valor dentro de um array*/
$alunoMaNota = $alunos[$indiceMaNota];

echo "A média da classe é: $media <br>";
echo "O aluno com a maior nota é: $alunoMaNota, que teve nota: $maiorNota";


?>