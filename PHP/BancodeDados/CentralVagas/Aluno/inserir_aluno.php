<?php
require_once("../cabecalho.php");
require_once("../style.html");


$conexao = conectarBanco();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $cpfAluno = $_POST['cpfAluno'];
    $dtNasc = $_POST['dtNasc'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];
    $rua = $_POST['rua'];
    $num = $_POST['num'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $email = $_POST['email'];
    $nomeResp = $_POST['nomeResp'];
    $celResp = $_POST['celResp'];
    $celAluno = $_POST['celAluno'];
    $idCurso = $_POST['idCurso'];

    if ($nome != "" && $cpfAluno != "" && $dtNasc != "" && $idade != "" && $sexo != "" && $rua != "" && $num != "" && $cidade != "" && $estado != "" && $email != "" && $nomeResp != "" && $celResp != "" && $celAluno != "" && $idCurso != "") {
        if (inserirAluno($cpfAluno, $nome, $dtNasc, $idade, $sexo, $rua, $num, $cidade, $estado, $email, $nomeResp, $celResp, $celAluno, $idCurso))
            echo "<div class='alert alert-success'>Registro inserido com sucesso!</div>";
        else
            echo "<div class='alert alert-danger'>Erro ao inserir o registro!</div>";
    } else {
        echo "<div class='alert alert-warning'>Preencha todos os campos!</div>";
    }
}

// Recuperar cursos do banco de dados
$cursos = [];
try {
    $sql = "SELECT idCurso, nomeCur FROM cursos";
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $cursos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "<div class='alert alert-danger'>Erro ao buscar cursos: " . $e->getMessage() . "</div>";
}
?>

<h1>Dados Pessoais</h1>
<form action="" method="POST">

    <div class="row mb-3">
        <div class="col">
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome aluno(a)" required>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="cpfAluno" id="cpfAluno" placeholder="CPF Aluno" required>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <input type="text" class="form-control" name="celAluno" id="celAluno" placeholder="Celular Aluno" required>
        </div>
        <div class="col">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <h3><label for="dtNasc" class="form-label">Data Nascimento: </label></h3>
        </div>
        <div class="col">
            <input type="date" class="form-control" name="dtNasc" required>
        </div>
        <div class="col">
            <select class="form-select" name="idade" id="idade" required>
                <option value="">Selecione a idade</option>
                <option value="6">6 anos</option>
                <option value="7">7 anos</option>
                <option value="8">8 anos</option>
                <option value="9">9 anos</option>
                <option value="10">10 anos</option>
                <option value="11">11 anos</option>
                <option value="12">12 anos</option>
                <option value="13">13 anos</option>
                <option value="14">14 anos</option>
                <option value="15">15 anos</option>
                <option value="16">16 anos</option>
                <option value="17">17 anos</option>
                <option value="18">18 anos</option>
            </select>
        </div>
        <div class="col">
            <div class="radio">
                <div class="col">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="sexoM" name="sexo" value="M" required>
                        <label class="form-check-label" for="sexoM">M</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="sexoF" name="sexo" value="F" required>
                        <label class="form-check-label" for="sexoF">F</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <input type="text" class="form-control" name="rua" id="rua" placeholder="Rua/Av" required>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="num" id="num" placeholder="Número" required>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" required>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado" required>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <input type="text" class="form-control" name="nomeResp" id="nomeResp" placeholder="Nome do Responsável" required>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="celResp" id="celResp" placeholder="Celular Responsável" required>
        </div>
    </div>

    <!-- Novo campo para selecionar o curso -->
    <div class="row mb-3">
        <div class="col">
            <select class="form-select" name="idCurso" id="idCurso" required>
                <option value="">Selecione um curso</option>
                <?php foreach ($cursos as $curso) : ?>
                    <option value="<?php echo $curso['idCurso']; ?>"><?php echo $curso['nomeCur']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <button type="submit" class="btn btn-primary mt-3">Salvar</button>
        </div>
    </div>
</form>

<?php
require_once("../rodape.php");
?>