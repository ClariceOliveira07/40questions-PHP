<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
        <label>Digite o preço de custo:</label>
        <input type="number" name="valor" step="0.1">
        <br>
        <label>Digite o percentual de acréscimo:</label>
        <input type="number" name="perc" step="0.1">
        <br>
        <button type="submit">Enviar informações</button>
    </form>
    <br>

    <?php

    if ($_POST){
        $preco = $_POST['valor'];
        $percen = $_POST['perc'];
        $valor = (float)$preco * (1 + ($percen / 100));
        echo "O valor de custo do produto é: " . $valor;
    }
    
    ?>
    
</body>
</html>