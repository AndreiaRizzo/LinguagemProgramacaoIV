<?php
require_once("../cabecalho.php");
session_start();
require_once("../style.html");


$conexao = conectarBanco(); // Certifique-se de estabelecer a conexão

$aluno = null;
$cpfAluno = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['btnPesquisar']) && !empty($_POST['cpfAluno'])) {
        $cpfAluno = $_POST['cpfAluno'];
        $_SESSION['cpfAluno'] = $cpfAluno;
        $aluno = consultarAluno($cpfAluno);

        if (!$aluno) {
            echo "Aluno não encontrado.";
        }
    } elseif (isset($_POST['btnSalvar'])) {
        // Receber os dados do formulário
        $cpfAluno = $_SESSION['cpfAluno'];
        $nome = $_POST['nome'];
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

        try {
            $sql = "UPDATE aluno SET nome = :nome, dtNasc = :dtNasc, idade = :idade, sexo = :sexo, rua = :rua, num = :num, cidade = :cidade, estado = :estado, email = :email, nomeResp = :nomeResp, celResp = :celResp, celAluno = :celAluno WHERE cpfAluno = :cpfAluno";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(':nome', $nome);
            $stmt->bindValue(':dtNasc', $dtNasc);
            $stmt->bindValue(':idade', $idade);
            $stmt->bindValue(':sexo', $sexo);
            $stmt->bindValue(':rua', $rua);
            $stmt->bindValue(':num', $num);
            $stmt->bindValue(':cidade', $cidade);
            $stmt->bindValue(':estado', $estado);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':nomeResp', $nomeResp);
            $stmt->bindValue(':celResp', $celResp);
            $stmt->bindValue(':celAluno', $celAluno);
            $stmt->bindValue(':cpfAluno', $cpfAluno);
            $stmt->execute();

            echo "Dados do aluno atualizados com sucesso.";
        } catch (PDOException $e) {
            echo "Erro ao atualizar dados do aluno: " . $e->getMessage();
        }
    }
}
?>

<h1>Alterar Dados do Aluno</h1>

<form action="" method="POST">
    <div class="form-group">
        <label for="cpfAluno">CPF do Aluno:</label>
        <input type="text" class="form-control" name="cpfAluno" value="<?php echo htmlspecialchars($cpfAluno); ?>" required>
        <input type="submit" class="btn btn-primary mt-3" value="Pesquisar" name="btnPesquisar">
    </div>
</form>

<?php if ($aluno) : ?>
    <form action="" method="POST">

        <input type="hidden" name="cpfAluno" value="<?php echo $aluno['cpfAluno']; ?>">
        <div class="row mb-3">
            <div class="col">
                <input type="text" class="form-control" name="nome" value="<?php echo $aluno['nome']; ?>" placeholder="Nome aluno(a)" required>
            </div>
            <div class="col">
                <input type="text" class="form-control" name="cpfAluno" value="<?php echo $aluno['cpfAluno']; ?>" placeholder="CPF Aluno" readonly>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="text" class="form-control" name="celAluno" value="<?php echo $aluno['celAluno']; ?>" placeholder="Celular Aluno" required>
            </div>
            <div class="col">
                <input type="email" class="form-control" name="email" value="<?php echo $aluno['email']; ?>" placeholder="Email" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <h3><label for="dtNasc" class="form-label">Data Nascimento: </label></h3>
            </div>
            <div class="col">
                <input type="date" class="form-control" name="dtNasc" value="<?php echo $aluno['dtNasc']; ?>" required>
            </div>
            <div class="col">
                <select class="form-select" name="idade" id="idade" required>
                    <option value="">Selecione a idade</option>
                    <?php for ($i = 6; $i <= 18; $i++) : ?>
                        <option value="<?php echo $i; ?>" <?php echo $aluno['idade'] == $i ? 'selected' : ''; ?>>
                            <?php echo $i; ?> anos
                        </option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="col">
                <div class="radio">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="sexoM" name="sexo" value="M" <?php echo $aluno['sexo'] == 'M' ? 'checked' : ''; ?> required>
                        <label class="form-check-label" for="sexoM">M</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="sexoF" name="sexo" value="F" <?php echo $aluno['sexo'] == 'F' ? 'checked' : ''; ?> required>
                        <label class="form-check-label" for="sexoF">F</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="text" class="form-control" name="rua" value="<?php echo $aluno['rua']; ?>" placeholder="Rua/Av" required>
            </div>
            <div class="col">
                <input type="text" class="form-control" name="num" value="<?php echo $aluno['num']; ?>" placeholder="Número" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="text" class="form-control" name="cidade" value="<?php echo $aluno['cidade']; ?>" placeholder="Cidade" required>
            </div>
            <div class="col">
                <input type="text" class="form-control" name="estado" value="<?php echo $aluno['estado']; ?>" placeholder="Estado" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="text" class="form-control" name="nomeResp" value="<?php echo $aluno['nomeResp']; ?>" placeholder="Nome do Responsável" required>
            </div>
            <div class="col">
                <input type="text" class="form-control" name="celResp" value="<?php echo $aluno['celResp']; ?>" placeholder="Celular Responsável" required>
            </div>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Salvar Alterações" name="btnSalvar">
        </div>
    </form>
<?php endif; ?>

<?php
require_once("../rodape.php");
?>