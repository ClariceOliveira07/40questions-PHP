<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
        <label>Digite o valor do produto:</label>
        <input type="number" name="valor" step="0.1">
        <br>
        <button type="submit">Enviar valor</button>
    </form>
    <br>

    <?php

    if ($_POST){
        $produto = $_POST['valor'];
        $valor = (float)$produto / 5;
        echo "O produto pode ser pago em 5 prestações (sem juros) de: " . $valor;
    }
    
    ?>
    
</body>
</html>