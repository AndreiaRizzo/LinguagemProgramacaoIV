<?php

function calcularMedia($nota1, $nota2) {
    return ($nota1 + $nota2) / 2;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alunos = array();

    foreach ($_POST['alunos'] as $aluno) {
        $nome = $aluno['nome'];
        $nota1 = $aluno['nota1'];
        $nota2 = $aluno['nota2'];
        $media = calcularMedia($nota1, $nota2);
        $situacao = $media >= 6 ? 'Aprovado' : 'Reprovado';
        $alunos[] = array('nome' => $nome, 'media' => $media, 'situacao' => $situacao);
    }

    echo "<h3>Alunos Aprovados</h3>";
    foreach ($alunos as $aluno) {
        if ($aluno['situacao'] === 'Aprovado') {
            echo "{$aluno['nome']} - Média: " . number_format($aluno['media'], 2) . "<br>";
        }
    }

    echo "<h3>Alunos Reprovados</h3>";
    foreach ($alunos as $aluno) {
        if ($aluno['situacao'] === 'Reprovado') {
            echo "{$aluno['nome']}<br>";
        }
    }
}
?>