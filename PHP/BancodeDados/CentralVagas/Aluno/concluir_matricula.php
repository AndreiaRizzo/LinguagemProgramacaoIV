<?php
require_once("../cabecalho.php");
require_once("../index.php");
?>
<h1>CONCLUIR MATRÍCULA</h1>
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

    <div class="row mb-3">
    <div class="col">
            <h3><label for="dt_nasc" class="form-label">Matrícula efetuada em:  </label></3>

        </div>
        <div class="col">
            <input type="date" class="form-control" name="matr_concluida">
        </div>
        
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary mt-3">Salvar</button>
        </div>
    </div>
</form>


<?php
require_once("../rodape.php");