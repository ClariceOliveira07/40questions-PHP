<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
        <label>Digite um número (de 1 a 5):</label>
        <input type="number" name="num" step="0.1">
        <br>
        <button type="submit">Enviar número</button>
</form>
<br>

<?php
if ($_POST) {
    $num = $_POST['num'];

    switch ($num) {
        case 1:
            echo "Você digitou o número Um";
            break;
        case 2:
            echo "Você digitou o número Dois";
            break;
        case 3:
            echo "Você digitou o número Três";
            break;
        case 4:
            echo "Você digitou o número Quatro";
            break;
        case 5:
            echo "Você digitou o número Cinco";
            break;
        default:
            echo "Você digitou um Número inválido.";
            break;
    }
}

?>

</body>
</html>