<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>

<body>
    <h2>Digite 10 números inteiros:</h2>
    <form action="exer5resposta.php" method="post">
        <?php
        for ($i = 0; $i < 10; $i++) {
            echo '<label>Número :</label><br>
                <input type="number" name="numeros[]"><br>';
        }
        ?>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>