<?php
require_once("../cabecalho.php");
session_start();
require_once("../style.html");


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnExcluir'])) {
    $cpfAluno = $_POST['cpfAluno'];

    if (excluirAluno($cpfAluno)) {
        echo "<div class='alert alert-success'>CPF $cpfAluno excluído com sucesso!</div>";
    } else {
        echo "<div class='alert alert-danger'>Erro ao excluir o CPF $cpfAluno!</div>";
    }
}

// Recuperar alunos do banco de dados
$alunos = [];
try {
    $sql = "SELECT cpfAluno, nome FROM aluno";
    $conexao = conectarBanco();
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "<div class='alert alert-danger'>Erro ao buscar alunos: " . $e->getMessage() . "</div>";
}
?>

<h1>Excluir Cadastro</h1>

<form action="" method="POST">
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

    <div class="row mt-3">
        <div class="col">
            <label for="text">Deseja realmente excluir?</label>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <input type="submit" class="btn btn-primary" value="Excluir" name="btnExcluir">
        </div>
    </div>
</form>

<?php
require_once("../rodape.php");

?>
