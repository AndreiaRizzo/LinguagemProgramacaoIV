<?php
require_once("../cabecalho.php");
require_once("../index.php");
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
            <form action="processar_selecao.php" method="post">
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
            </form>
        </tbody>
    </table>

    <div class="row">
        <div class="col">
            <h4><p class="mt-4">Deseja realmente Excluir?</p></h4>
            <button type="submit" class="btn btn-primary mt-3">Excluir</button>
        </div>
    </div>
</form>


<?php
require_once("../rodape.php");