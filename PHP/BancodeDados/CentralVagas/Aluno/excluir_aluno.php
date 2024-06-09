<?php
require_once("../cabecalho.php");
session_start();
require_once("../style.html");

if (isset($_GET['cpfAluno'])) {
    $cpfAluno = $_GET['cpfAluno']; //método get vai mostrar na tela os dados do banco
    $_SESSION['cpfAluno'] = $cpfAluno;
}

if ($_POST) {
    $cpfAluno = $_SESSION['cpfAluno'];
    if (excluirAluno($_SESSION['cpfAluno'])) {

        header('Location: index.php');
        exit();
    } else {
        echo "Erro ao excluir o registro!";
    }
}


$dados = consultarAluno($cpfAluno); //variável vai receber todos os dados desse id que está no banco de dados


?>
<h1>Excluir Cadastro</h1>

<form action="excluir_aluno.php" method="POST">
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
                            if ($l['cpfAluno'] == $dados["cpfAluno"])
                                echo "<option selected value='{$l['cpfAluno']}'>{$l['nome']}</option>";
                            else
                                echo "<option value='{$l['cpfAluno']}>{$l['nome']}</option>";
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
           
            <input type="submit" class="btn btn-primary mt-3" value="Excluir" name="btnExcluir>
        </div>
    </div>
</form>

<?php
require_once("../rodape.php");
