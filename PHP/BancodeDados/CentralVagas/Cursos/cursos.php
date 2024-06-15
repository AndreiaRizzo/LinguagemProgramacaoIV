<?php
require_once("../cabecalho.php");
session_start();
require_once("../style.html");


$conexao = conectarBanco();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnCadastrar'])) {
    $idCurso = $_POST['idCurso'];
    $nomeCur = $_POST['nomeCur'];
    $diaCur = $_POST['diaCur'];
    $periodoCur = $_POST['periodoCur'];

    try {
        $sql = "INSERT INTO cursos (idCurso, nomeCur, diaCur, periodoCur) VALUES (:idCurso, :nomeCur, :diaCur, :periodoCur)";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':idCurso', $idCurso);
        $stmt->bindValue(':nomeCur', $nomeCur);
        $stmt->bindValue(':diaCur', $diaCur);
        $stmt->bindValue(':periodoCur', $periodoCur);
        $stmt->execute();

        echo "<div class='alert alert-success'>Curso cadastrado com sucesso.</div>";
    } catch (PDOException $e) {
        echo "<div class='alert alert-danger'>Erro ao cadastrar curso: " . $e->getMessage() . "</div>";
    }
}

$cursos = [];
try {
    $sql = "SELECT idCurso, nomeCur, diaCur, periodoCur FROM cursos";
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $cursos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "<div class='alert alert-danger'>Erro ao buscar cursos: " . $e->getMessage() . "</div>";
}

?>

<h1>Cadastrar Curso</h1>

<!-- Formulário de Cadastro de Curso -->
<form action="" method="POST">
    <div class="row mb-3">
        <div class="col">
            <input type="text" class="form-control" name="idCurso" placeholder="Código do Curso" required>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="nomeCur" placeholder="Nome do Curso" required>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="diaCur" placeholder="Dia do Curso" required>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="periodoCur" placeholder="Período do Curso" required>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="submit" class="btn btn-primary" value="Cadastrar Curso" name="btnCadastrar">
        </div>
    </div>
</form>

<!-- Tabela de Cursos Cadastrados -->
<h2>Cursos Cadastrados</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID Curso</th>
            <th>Nome do Curso</th>
            <th>Dia do Curso</th>
            <th>Período do Curso</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($cursos as $curso) : ?>
            <tr>
                <td><?php echo $curso['idCurso']; ?></td>
                <td><?php echo $curso['nomeCur']; ?></td>
                <td><?php echo $curso['diaCur']; ?></td>
                <td><?php echo $curso['periodoCur']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
require_once("../rodape.php");
?>