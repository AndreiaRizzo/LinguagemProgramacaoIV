<?php
require_once("../cabecalho.php");

require_once("../style.html");

// Recuperar alunos da lista de espera ordenados pelo nome do curso
$alunos = [];
try {
    $sql = "SELECT le.aluno_cpfAluno AS cpfAluno, a.nome AS nomeAluno, c.nomeCur AS curso, le.dtCadastro
            FROM listaespera le
            INNER JOIN aluno a ON le.aluno_cpfAluno = a.cpfAluno
            INNER JOIN cursos c ON le.cursos_idCurso = c.idCurso
            ORDER BY c.nomeCur"; // Ordenar por curso

    $conexao = conectarBanco();
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "<div class='alert alert-danger'>Erro ao buscar alunos: " . $e->getMessage() . "</div>";
}
?>

<h1>Lista de Espera Ordenada por Curso</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nome Aluno</th>
            <th>CPF Aluno</th>
            <th>Curso</th>
            <th>Data de Cadastro</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($alunos as $aluno) : ?>
            <tr>
                <td><?php echo htmlspecialchars($aluno['nomeAluno'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?php echo htmlspecialchars($aluno['cpfAluno'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?php echo htmlspecialchars($aluno['curso'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?php echo date('d/m/Y', strtotime($aluno['dtCadastro'])); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
require_once("../rodape.php");


?>
