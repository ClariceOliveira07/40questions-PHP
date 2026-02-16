<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
        <label>Digite um mês (de 1 a 12):</label>
        <input type="number" name="num" step="0.1">
        <br>
        <button type="submit">Enviar mês</button>
</form>
<br>

<?php
if ($_POST) {
    $mes = $_POST['num'];

    switch ($mes) {
        case 1:
            echo "Você digitou o mês de Janeiro";
            break;
        case 2:
            echo "Você digitou o mês de Fevereiro";
            break;
        case 3:
            echo "Você digitou o mês de Março";
            break;
        case 4:
            echo "Você digitou o mês de Abril";
            break;
        case 5:
            echo "Você digitou o mês de Maio";
            break;
        case 6:
            echo "Você digitou o mês de Junho";
            break;
        case 7:
            echo "Você digitou o mês de Julho";
            break;
        case 8:
            echo "Você digitou o mês de Agosto";
            break;
        case 9:
            echo "Você digitou o mês de Setembro";
            break;
        case 10:
            echo "Você digitou o mês de Outubro";
            break;
        case 11:
            echo "Você digitou o mês de Novembro";
            break;
        case 12:
            echo "Você digitou o mês de Dezembro";
            break;
        default:
            echo "Você digitou um Mês inválido.";
            break;
    }
}

?>

</body>
</html>