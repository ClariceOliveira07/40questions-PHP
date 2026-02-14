<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
        <label>Digite dois números:</label>
        <input type="number" name="meunum1" step="0.1">
        <input type="number" name="meunum2" step="0.1">
        <button type="submit">Somar números</button>
    </form>
    <br>

    <?php

    if ($_POST) {
        $numero1 = $_POST['meunum1'];
        $numero2 = $_POST['meunum2'];
        $soma = (float)$numero1 + (float)$numero2;
        echo "A soma dos dois números é: " . $soma;
    }

    ?>
    
</body>
</html>