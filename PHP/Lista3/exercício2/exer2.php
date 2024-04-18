<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercício 2</title>
</head>

<body>
    <form action="exer2resposta.php" method="post">
        <?php
        for ($i = 1; $i <= 4; $i++) {
            echo "<label>Digite o número da $i ª posição :<br><br></label>";
            echo "<input type='number' name='numeros[]' step='0.01' <br><br><br>";
        }
        ?>
        <button type="submit">Analisar</button>
    </form>
</body>

</html>