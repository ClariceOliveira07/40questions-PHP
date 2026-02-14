<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
        <label>Valor A:</label>
        <input type="number" name="vala" step="0.1">
        <br>
        <label>Valor B:</label>
        <input type="number" name="valb" step="0.1">
        <br>
        <button type="submit">Enviar valores</button>
    </form>
    <br>

    <?php

    if ($_POST){
        $valora = $_POST['valb'];
        $valorb = $_POST['vala'];
        echo "O valor de A é: " . $valora . "<br>";
        echo "O valor de B é: " . $valorb;
    }
    
    ?>
    
</body>
</html>