<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
        <label>Digite o valor da cotação do dólar:</label>
        <input type="number" name="cotd" step="0.1">
        <br>
        <label>Digite quantos dólares possui:</label>
        <input type="number" name="dola" step="0.1">
        <br>
        <button type="submit">Enviar valores</button>
    </form>
    <br>

    <?php

    if ($_POST){
        $cotacao = $_POST['cotd'];
        $dollar = $_POST['dola'];
        $reais = (float)$dollar * (float)$cotacao;
        echo "O valor da cotação é: " . $cotacao . "<br>";
        echo "O valor em dólares é: " . $dollar . "<br>";
        echo "O valor em reais é: " . $reais;
    }
    
    ?>
    
</body>
</html>