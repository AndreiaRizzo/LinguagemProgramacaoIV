<?php
require_once("../cabecalho.php");
require_once("../style.html");
session_start();
if (isset($_GET['cpfAluno'])) {
    $cpfAluno = $_GET['cpfAluno']; //método get vai mostrar na tela os dados do banco

    $_SESSION['cpfAluno'] = $cpfAluno;
}

if ($_POST) {
    $cpfAluno = $_SESSION['cpfAluno'];
    if (excluirAluno($_SESSION['cpfAluno']))

        header('Location: cabecalho.php');

    else
        echo "Erro ao excluir o registro!";
}

$dados = consultarAluno($cpfAluno); //variável vai receber todos os dados desse id que está no banco de dados


?>
<h1>Excluir Cadastro</h1>
<form>

    <table class="table table-borderless">
        <thead>
            <tr>
                <th>Nome e CPF Aluno</th>
            </tr>
        </thead>
        <tbody>
            <form action="excluir_aluno.php" method="POST">
                <tr>
                    <td>
                        <select name="cpfAluno" class="form-select">
                            <?php
                            $linhas = retornarAluno();
                            while ($l = $linhas->fetch(PDO::FETCH_ASSOC)) {
                                if ($l ['cpfAluno'] == $dados["aluno"])
                                echo "<option value='{$l['cpfAluno']}'>{$l['nome']} - {$l['cpfAluno']}</option>";
                            else
                                echo "<option value='{$l['cpfAluno']}>{$l['nome']}</option>";
                            }
                            ?>
                        </select>
                    </td>

                </tr>
            </form>
        </tbody>
    </table>

    <div class="row">
        <div class="col">
            <h4>
                <p class="mt-4">Deseja realmente Excluir?</p>
            </h4>
            <button type="submit" class="btn btn-primary mt-3">Excluir</button>
        </div>
    </div>
</form>


<?php
require_once("../rodape.php");
