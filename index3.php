<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
        <label>Digite a distância percorrida pelo carro:</label>
        <input type="number" name="dist" step="0.1">
        <br>
        <label>Digite o total de combustível gasto pelo carro:</label>
        <input type="number" name="combu" step="0.1">
        <br>
        <button type="submit">Enviar valores</button>
    </form>
    <br>

    <?php

    if ($_POST) {
        $valor1 = $_POST['dist'];
        $valor2 = $_POST['combu'];
        $result = (float)$valor1 / (float)$valor2;
        echo "O consumo médio do carro foi: " . $result;
    }
    
    ?>
    
</body>
</html>