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
        <input type="number" name="valora">
        <br>
        <label>Digite outro valor:</label>
        <input type="number" name="valorb">
        <br>
        <label>Digite outro valor:</label>
        <input type="number" name="valorc">
        <br>
        <button type="submit">Enviar valores</button>
    </form>
    <br>

    <?php

    if ($_POST){
        $valora = $_POST['valora'];
        $valorb = $_POST['valorb'];
        $valorc = $_POST['valorc'];
        if ($valora > $valorb && $valorb > $valorc){
        echo "A sequência é: $valora, $valorb e $valorc";
        } elseif ($valora > $valorc && $valorc > $valorb){
            echo "A sequência é: $valora, $valorc e $valorb";
        } elseif ($valorb > $valora && $valora > $valorc){
            echo "A sequência é: $valorb, $valora e $valorc";
        } elseif ($valorb > $valorc && $valorc > $valora){
            echo "A sequência é: $valorb, $valorc e $valora";
        } elseif ($valorc > $valorb && $valorb > $valora){
            echo "A sequência é: $valorc, $valorb e $valora";
        } elseif ($valorc > $valora && $valora > $valorb){
            echo "A sequência é: $valorc, $valora e $valorb";
        }
    }
    
    ?>
    
</body>
</html>