<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7 </title>
</head>
<body>
    <h2>Lista de Alunos</h2>
    <form action="exer7resposta.php" method="post">
        <?php for ($i = 1; $i <= 3; $i++) { ?>
            <label for="nome<?= $i ?>">Aluno <?= $i ?> - Nome:</label>
            <input type="text" id="nome<?= $i ?>" name="alunos[<?= $i ?>][nome]" required>

            <label for="nota1_<?= $i ?>">Nota 1:</label>
            <input type="number" id="nota1_<?= $i ?>" name="alunos[<?= $i ?>][nota1]" step="0.01" required>

            <label for="nota2_<?= $i ?>">Nota 2:</label>
            <input type="number" id="nota2_<?= $i ?>" name="alunos[<?= $i ?>][nota2]" step="0.01" required><br>
        <?php } ?>
        <button type="submit" name="calcular">Calcular</button>
    </form>
</body>
</html>