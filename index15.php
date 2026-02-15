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
        if ($valor > 100 && $valor < 200){
        echo "O valor $valor é maior que 100 e manor que 200";
        } else{
            echo "O valor $valor não se encontra na sequência entre 100 e 200";
        }
    }
    
    ?>
    
</body>
</html>