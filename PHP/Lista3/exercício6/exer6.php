<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>

<body>
    <form action="exer6resposta.php" method="post">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "<label for='produto$i'>Nome do Produto $i:</label><br>";
            echo "<input type='text'  name='produtos[]'><br>";

            echo "<label for='preco$i'>Preço do Produto $i:</label><br>";
            echo "<input type='number' step='0.01' min='0' name='precos[]'><br><br>";
        }
        ?>
        <button type="submit">Analisar Produtos</button>
    </form>
</body>

</html>