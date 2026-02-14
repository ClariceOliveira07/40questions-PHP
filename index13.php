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
        <input type="number" name="valor" step="0.1">
        <br>
        <button type="submit">Enviar valor</button>
    </form>
    <br>

    <?php

    if ($_POST){
        $valor = $_POST['valor'];
        if ($valor > 10){
        echo "O valor é maior que 10";
        } else{
            echo "O valor é menor que 10";
        }
    }
    
    ?>
    
</body>
</html>