<?php
require_once("../cabecalho.php");
require_once("../index.php");
?>



<h1>ESCOLHA A OPÇÃO DESEJADA</h1>

<div class="container mt-3">
    <a href="inserir_aluno.php" class="btn btn-primary mt-3">CADASTRAR ALUNO </a>


</div>

<div class="container mt-3">
    <a href="lista.php" class="btn btn-primary mt-3">LISTA DE ESPERA CURSOS OFERECIDOS </a>
    <a href="lista.php" class="btn btn-primary mt-3">LISTA DE ESPERA CURSOS NOVOS </a>


</div>
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
                <td>
                    <button type="submit" name="acao" value="alterar" class="btn btn-primary">Alterar</button>
                    <button type="submit" name="acao" value="excluir" class="btn btn-primary">Excluir</button>
                    <button type="submit" name="acao" value="concluir" class="btn btn-primary">Concluir Matrícula</button>
                </td>
            </tr>
        </form>
    </tbody>
</table>


<?php
require_once("../rodape.php");
?>