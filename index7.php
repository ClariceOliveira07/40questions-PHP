<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
        <label>Temperatura (em Celsius):</label>
        <input type="number" name="cel" step="0.1">
        <br>
        <button type="submit">Enviar valor</button>
    </form>
    <br>

    <?php

    if ($_POST){
        $tempc = $_POST['cel'];
        $tempf = (float)$tempc * 1.8 + 32;
        echo "A temperatura em Fahrenheit é: " . $tempf;
    }
    
    ?>
    
</body>
</html>