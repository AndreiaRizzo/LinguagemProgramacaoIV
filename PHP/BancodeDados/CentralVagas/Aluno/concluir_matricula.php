<?php
require_once("../cabecalho.php");
require_once("../style.html");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cpfAluno = $_POST['cpfAluno'];
    $idCurso = $_POST['idCurso'];

    if (inserirMatricula($cpfAluno, $idCurso)) {
        if (removerDaListaEspera($cpfAluno)) {
            echo "<div class='alert alert-success'>Matrícula concluída com sucesso!</div>";
        } else {
            echo "<div class='alert alert-danger'>Erro ao remover da lista de espera!</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Erro ao concluir matrícula!</div>";
    }
}

// Recuperar cursos do banco de dados
$cursos = [];
try {
    $sql = "SELECT idCurso, nomeCur FROM cursos";
    $conexao = conectarBanco();
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $cursos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "<div class='alert alert-danger'>Erro ao buscar cursos: " . $e->getMessage() . "</div>";
}

// Recuperar alunos da lista de espera do banco de dados ordenados por curso
$alunos = retornarAlunosListaEspera();
?>

<h1>CONCLUIR MATRÍCULA</h1>
<form action="" method="post">
    <table class="table table-borderless">
        <thead>
            <tr>
                <th>Nome e CPF Aluno</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <select name="cpfAluno" class="form-select" required>
                        <option value="">Selecione um aluno</option>
                        <?php
                        foreach ($alunos as $aluno) {
                            echo "<option value='{$aluno['cpfAluno']}'>{$aluno['nome']} - {$aluno['cpfAluno']}</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>


    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary mt-3">Salvar</button>
        </div>
    </div>
</form>

<?php
require_once("../rodape.php");
?>
