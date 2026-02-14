<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
        <label>Digite o custo de fábrica do veículo:</label>
        <input type="number" name="cust" step="0.1">
        <br>
        <button type="submit">Enviar valor</button>
    </form>
    <br>

    <?php

    if ($_POST){
        $custo = $_POST['cust'];
        $percenimp = 0.45;
        $percendist = 0.28;
        $valorimp = (float)$custo * (1 + $percenimp);
        $valorconsu = (float)$valorimp * (1 + $percendist);
        echo "O custo de fábrica do produto é: " . $custo . "<br>";
        echo "O preço final do consumidor é: " . $valorconsu;
    }
    
    ?>
    
</body>
</html>