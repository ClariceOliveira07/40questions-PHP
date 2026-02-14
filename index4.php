<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
        <label>Nome do vendedor:</label>
        <input type="text" name="nomevend">
        <br>
        <label>Salário fixo:</label>
        <input type="number" name="salario" step="0.1">
        <br>
        <label>Total de vendas (em R$):</label>
        <input type="number" name="vendas" step="0.1">
        <br>
        <button type="submit">Enviar</button>
    </form>
    <br>

    <?php

    if ($_POST){
        $nome = $_POST['nomevend'];
        $salariofixo = $_POST['salario'];
        $valorvendas = $_POST['vendas'];
        $comissao = (float)$valorvendas * 0.15;
        $salariofinal = (float)$salariofixo + $comissao;
        echo "Vendedor: " . $nome . "<br>";
        echo "Salário Fixo: R$ " . $salariofixo . "<br>";
        echo "Salário Final: R$ " . $salariofinal;
    }
    
    ?>
    
</body>
</html>