<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
        <label>Digite um primeiro número:</label>
        <input type="number" name="num1" step="0.1">
        <br>
        <label>Digite um segundo número:</label>
        <input type="number" name="num2" step="0.1">
        <br>
        <button type="submit">Enviar números</button>
</form>
<br>

<?php
if ($_POST) {
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    if ($n1 == $n2) {
        echo "Os números digitados são iguais";
    } 
    else {
        echo "Os números são diferentes <br>";
        if ($n1 > $n2) {
            echo "O primeiro número $n1 é o maior";
        } else {
            echo "O segundo número $n2 é o maior";
        }
    }
}

?>

</body>
</html>