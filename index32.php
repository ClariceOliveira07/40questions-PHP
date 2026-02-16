<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST">
        <label>Número A:</label>
        <input type="number" name="numA" step="0.01">
        <br>
        <label>Número B:</label>
        <input type="number" name="numB" step="0.01">
        <br>
        <label>Operação:</label>
        <select name="operacao">
            <option value="+">Soma (+)</option>
            <option value="-">Subtração (-)</option>
            <option value="*">Multiplicação (*)</option>
            <option value="/">Divisão (/)</option>
        </select>
        <br>
        <button type="submit">Calcular</button>
    </form>

    <?php

    if ($_POST) {
        $A = (float)$_POST['numA'];
        $B = (float)$_POST['numB'];
        $C = $_POST['operacao'];
        switch ($C) {
            case '+':
                echo "$A + $B = " . ($A + $B);
                break;
            case '-':
                echo "$A - $B = " . ($A - $B);
                break;
            case '*':
                echo "$A * $B = " . ($A * $B);
                break;
            case '/':
                if ($B == 0) {
                    echo "Não é possível dividir por zero!";
                } else {
                    echo "$A / $B = " . ($A / $B);
                }
                break;
            default:
                echo "Operador não definido.";
                break;
        }
    }

    ?>

</body>
</html>