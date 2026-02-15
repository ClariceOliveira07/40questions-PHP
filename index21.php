<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Concessionária Carango Velho</title>
</head>
<body>

 <form method="POST">
        <label>Digite os nomes (separados por espaço):</label>
        <input type="text" name="nomes">
        <br>
        <label>digite o sexo de cada pessoa (M ou F, separados por espaço):</label>
        <input type="text" name="sexos">
        <br>
        <label>Digite as idades das pessoas (separados por espaço):</label>
        <input type="text" name="idades">
        <br>
        <label>Digite o estado de saúde das pessoas (B de Boa e R de Ruim, separados por espaço):</label>
        <input type="text" name="saude">
        <br>
        <button type="submit">Enviar dados</button>
    </form>
    <br>

<?php

if ($_POST) {
    $nomes  = explode(" ", $_POST['nomes']);
    $sexos  = explode(" ", $_POST['sexos']);
    $idades = explode(" ", $_POST['idades']);
    $saude  = explode(" ", $_POST['saude']);
    $totalpositivo = 0;
    $totalnegativo = 0;
    foreach ($nomes as $indice => $nome) {
        $nome  = trim($nome);
        $sexo  = isset($sexos[$indice]) ? strtoupper(trim($sexos[$indice])) : '';
        $idade = isset($idades[$indice]) ? (int)trim($idades[$indice]) : 0;
        $statussaude = isset($saude[$indice]) ? strtoupper(trim($saude[$indice])) : '';
        if ($sexo == 'M' && $idade >= 18 && $statussaude == 'B') {
            echo "$nome: APTO para o serviço militar <br>";
            $totalpositivo++;
        } else {
            echo "$nome: INAPTO <br>";
            $totalnegativo++;
        }
    }
    echo "Aptos: $totalpositivo <br>";
    echo "Inaptos: $totalnegativo <br>";
    echo "Total de pessoas analisadas: " . ($totalpositivo + $totalnegativo);
}

?>

</body>
</html>