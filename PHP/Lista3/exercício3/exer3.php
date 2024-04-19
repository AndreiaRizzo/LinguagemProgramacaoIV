<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <form action="exer3resposta.php" method="post">
        <?php
        for ($i=1; $i <= 4; $i++){
            echo "<label> Digite o $i º número: <br></label>";
            echo "<input type = 'number' name = 'numeros[]'> <br><br>";
        }
        echo "<label> Digite o multiplicador: </label><br>
            <input type = 'number' name = 'multiplicador'><br><br>";
        ?>
        <button type="submit">Multiplicar</button>
    </form>
    

</body>
</html>