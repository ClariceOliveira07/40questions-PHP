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
        if ($valor > 80 || $valor < 25 || $valor == 40){
        echo "O valor segue a regra imposta";
        } else{
            echo "O valor não segue a regra imposta";
        }
    }
    
    ?>
    
</body>
</html>