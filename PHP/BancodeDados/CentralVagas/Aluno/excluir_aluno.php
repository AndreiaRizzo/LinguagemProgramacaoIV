<?php
require_once("../cabecalho.php");
session_start();
require_once("../style.html");

if (isset($_GET['cpfAluno'])) {
    $cpfAluno = $_GET['cpfAluno']; //método get vai mostrar na tela os dados do banco
    $_SESSION['cpfAluno'] = $cpfAluno;
}

if ($_POST && isset($_POST['btnExcluir'])) {
    $cpfAluno = $_POST['cpfAluno'];

    if (excluirAluno($cpfAluno)) {
        echo "CPF $cpfAluno excluído com sucesso";
    } else {
        echo "Erro ao excluir o CPF $cpfAluno";
    }
}

$dados = retornarAluno(); //variável vai receber todos os dados desse id que está no banco de dados


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
                    <select name="cpfAluno" class="form-select">
                        <?php
                        $linhas = retornarAluno();
                        while ($l = $linhas->fetch(PDO::FETCH_ASSOC)) {
                            echo "<option value='{$l['cpfAluno']}'>{$l['nome']} - {$l['cpfAluno']}</option>";
                        }
                        ?>
                    </select>
                </td>

            </tr>

        </tbody>
    </table>

    <div class="row">
        <div class="col">
            <label for="text">Deseja realmente excluir?</label>

            <input type="submit" class="btn btn-primary mt-3" value="Excluir" name="btnExcluir">
        </div>
    </div>
</form>

<?php
require_once("../rodape.php");
