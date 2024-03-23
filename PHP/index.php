<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    Hoje é dia <?php echo date("d/m/y");?>   <!--echo em php exibe a data-->
    <form action="resposta.php" method="post"> <!--action é a página onde será enviado os dados, get é para enviar na url, post não envia na url-->
        <label> Informe o valor 1:</label>
        <input type="text" name="valor1">
        <label> Informe o valor 2:</label>
        <input type="text" name="valor2">
        <button type="submit">Enviar</button> 
    </form>
</body>
</html>