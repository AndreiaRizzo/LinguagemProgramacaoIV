<?php
require_once("../cabecalho.php");
require_once("../index.php");
?>



    <h1>ESCOLHA A OPÇÃO DESEJADA</h1>

    <div class="container mt-3">
        <a href="inserir_aluno.php" class="btn btn-outline-primary mt-3">CADASTRAR ALUNO </a>
        <a href="lista.php" class="btn btn-outline-primary mt-3">CONCLUIR MATRÍCULA </a>

    </div>

    <div class="container mt-3">
        <a href="lista.php" class="btn btn-outline-primary mt-3">LISTA DE ESPERA CURSOS OFERECIDOS </a>
        <a href="lista.php" class="btn btn-outline-primary mt-3">LISTA DE ESPERA CURSOS NOVOS </a>
        
    </div>
    <table class=" table table-borderless">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF Aluno</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $linhas = retornarAluno();
            while ($l = $linhas->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <tr>
                    <td><?= $l['nome'] ?></td>
                    <td><?= $l['cpfAluno'] ?></td>
                    <<td>
                        <a href="alterar_dados.php?id=<?= $l['cpfAluno'] ?>" class="btn btn-primary">
                            Alterar
                        </a>
                        <a href="excluir_aluno.php?id=<?= $l['cpfAluno'] ?>" class="btn btn-primary">
                            Excluir
                        </a>
                        </td>
                </tr>
            <?php
            }
            ?>
        </tbody>

    </table>

    <?php
    require_once("../rodape.php");
    ?>