<!--1.	Entre com os dados de 10 alunos de uma classe, 
recebendo as informações como nome e uma nota do aluno. 
Armazene estes dados em um mapa ordenado. Ao final do programa mostrar a média de nota da classe,
 e o nome do aluno que obteve maior nota.-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média da classe</title>
</head>

<body>
    <form action="exer1resposta.php" method="post">
        <?php
        for ($i = 0; $i < 10; $i++) {
            echo '<labe> Digite o nome do aluno: </label><br>';
            echo '<input type="name" name="aluno[]"><br>';
            echo '<labe> Digite a nota do aluno: </label><br>';
            echo '<input type="number" name="nota[]" step="0.01"><br>';
        }
        ?>
        <button type="submit"> OK</button>
    </form>
</body>

</html>