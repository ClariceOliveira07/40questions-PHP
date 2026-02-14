<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
        <label>Digite o valor depositado:</label>
        <input type="number" name="valor" step="0.1">
        <br>
        <button type="submit">Enviar valor</button>
    </form>
    <br>

    <?php

    if ($_POST){
        $deposito = $_POST['valor'];
        $taxa = 0.007;
        $valor = (float)$deposito * (1 + $taxa);
        echo "Após um mês, o rendimento foi de: " . $valor;
    }
    
    ?>
    
</body>
</html>