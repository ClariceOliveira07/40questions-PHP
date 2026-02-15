<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Concessionária Carango Velho</title>
</head>
<body>

    <form method="POST">
        <label>Valor do Carro:</label>
        <input type="number" name="valor" step="0.01">
        <br>
        <label>Ano do Veículo:</label>
        <input type="number" name="ano">
        <br>
        <label>Deseja continuar calculando? (S/N):</label>
        <input type="text" name="continuar">
        <br>
        <button type="submit">Calcular Desconto</button>
    </form>
    <br>

    <?php

    session_start();
    if (!isset($_SESSION['cont2000'])) {
    $_SESSION['cont2000'] = 0;
    }
    if ($_POST) {
        $valorcarro = $_POST['valor'];
        $anocarro = $_POST['ano'];
        $resposta = strtoupper($_POST['continuar']);
        if ($anocarro <= 2000) {
            $porcentagem = 0.12;
            $_SESSION['cont2000']++;
            echo "Desconto aplicado: 12% <br>";
        } else {
            $porcentagem = 0.07; 
            echo "Desconto aplicado: 7% <br>";
        }
        $valordesconto = $valorcarro * $porcentagem;
        $valorfinal = $valorcarro - $valordesconto;
        echo "Valor do desconto: R$ " . $valordesconto . "<br>";
        echo "Valor total a pagar: R$ " . $valorfinal . "<br>";
        echo "Total de carros até 2000: " . $_SESSION['cont2000'] . "<br>";
        if ($resposta == "N") {
            echo "Encerrando o sistema";
        }
    }

    ?>

</body>
</html>