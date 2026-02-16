<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <form method="POST">
        <label>Valor do veículo:</label>
        <input type="number" name="valor" step="0.01">
        <br>
        <label>Combstível:</label>
        <select name="comb">
            <option value="alcool">Álcool (25%)</option>
            <option value="gasolina">Gasolina (21%)</option>
            <option value="diesel">Diesel (14%)</option>
        </select>
        <br>
        <button type="submit">Calcular Desconto</button>
    </form>
    <br>

    <?php

    session_start();
    if (!isset($_SESSION['totaldesconto'])) {
        $_SESSION['totaldesconto'] = 0;
        $_SESSION['totalpago'] = 0;
    }

    if ($_POST) {
        $valor = (float)$_POST['valor'];
        $combustivel = $_POST['comb'];
        if ($valor <= 0) {
            echo "Total de Descontos concedidos: R$ " . $_SESSION['totaldesconto'] . "<br>";
            echo "Total Pago pelos clientes: R$ " . $_SESSION['totalpago'] . "<br>";
            $percentual = 0;
        if ($combustivel == "alcool") {
            $percentual = 0.25;
        } elseif ($combustivel == "gasolina") {
            $percentual = 0.21;
        } elseif ($combustivel == "diesel") {
            $percentual = 0.14;
        }
        $valordesconto = $valor * $percentual;
        $valorfinal = $valor - $valordesconto;
        $_SESSION['totaldesconto'] += $valordesconto;
        $_SESSION['totalpago'] += $valorfinal;
        echo "Valor do Desconto: R$ " . $valor_desconto . "<br>";
        echo "Valor a Pagar: R$ " . $valor_final . "<br>";
        }
    }

    ?>

</body>
</html>