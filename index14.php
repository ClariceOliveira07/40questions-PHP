<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
        <label>Digite um valor:</label>
        <input type="number" name="valora" step="0.1">
        <br>
        <label>Digite outro valor:</label>
        <input type="number" name="valorb" step="0.1">
        <br>
        <button type="submit">Enviar valor</button>
    </form>
    <br>

    <?php

    if ($_POST){
        $valora = $_POST['valora'];
        $valorb = $_POST['valorb'];
        if ($valora > $valorb){
        echo "O valor $valora é maior que o valor $valorb";
        } else{
            echo "O valor $valorb é maior que o valor $valora";
        }
    }
    
    ?>
    
</body>
</html>