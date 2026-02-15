<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
        <label>Digite vários números (separados por espaço):</label>
        <input type="text" name="numeros" step="0.1">
        <br>
        <button type="submit">Enviar valores</button>
    </form>
    <br>

<?php

if ($_POST) {
    $listanum = explode(" ", $_POST['numeros']);
    $contpositivos = 0;
    $contnegativos = 0;
    $contzeros = 0;
    foreach ($listanum as $valor) {
        $num = trim($valor);
        if (is_numeric($num)) {
            $num = (float)$num;
            if ($num > 0) {
                echo "O número $num é: Positivo <br>";
                $contpositivos++;
            } 
            elseif ($num < 0) {
                echo "O número $num é: Negativo <br>";
                $contnegativos++;
            } 
            else {
                echo "O número $num é: Zero <br>";
                $contzeros++;
            }
        }
    }
    echo "Positivos: $contpositivos <br>";
    echo "Negativos: $contnegativos <br>";
    echo "Zeros: $contzeros";
}

?>

</body>
</html>