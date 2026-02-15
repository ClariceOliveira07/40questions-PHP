<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Concessionária Carango Velho</title>
</head>
<body>

 <form method="POST">
        <label>Digite os preços de custo (separados por espaço):</label>
        <input type="text" name="custos">
        <br>
        <label>digite os preços de venda (separados por espaço):</label>
        <input type="text" name="vendas">
        <br>
        <button type="submit">Enviar dados</button>
    </form>
    <br>

<?php
if ($_POST) {
    $listacustos = explode(" ", $_POST['custos']);
    $listavendas = explode(" ", $_POST['vendas']);
    $somacusto = 0;
    $somavenda = 0;
    $total = 0;
    for ($i = 0; $i < 40 && $i < count($listacustos); $i++) {
        $custo = (float)$listacustos[$i];
        $venda = (float)$listavendas[$i];
        $total++;
        $somacusto += $custo;
        $somavenda += $venda;
        if ($venda > $custo) {
            $resultado = "LUCRO";
        } elseif ($venda < $custo) {
            $resultado = "PREJUÍZO";
        } else {
            $resultado = "EMPATE";
        }
        echo "Produto " . ($i + 1) . ": Custo R$ $custo | Venda R$ $venda > $resultado <br>";
    }
    if ($total > 0) {
        $mediacusto = $somacusto / $total;
        $mediavenda = $somavenda / $total;
        echo "Média de Preço de Custo: R$ " . $mediacusto . "<br>";
        echo "Média de Preço de Venda: R$ " . $mediavenda . "<br>";
    }
}
?>

</body>
</html>