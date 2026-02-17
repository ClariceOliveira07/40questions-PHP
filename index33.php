<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
        <label>Lado A:</label>
        <input type="number" name="a">
        <br>
        <label>Lado B:</label>
        <input type="number" name="b">
        <br>
        <label>Lado C:</label>
        <input type="number" name="c">
        <br>
        <button type="submit">Enviar</button>
    </form>
    <br>

    <?php

    if ($_POST){
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        echo "Lados informados: $a, $b, $c <br>";
        if (($a < $b + $c) && ($b < $a + $c) && ($c < $a + $b)) {
            echo "Os valores formam um triângulo ";
            if ($a == $b && $b == $c) {
                echo "Equilátero";
            } elseif ($a == $b || $a == $c || $b == $c) {
                echo "Isósceles";
            } else {
                echo "Escaleno";
            }
        } else {
            echo "Os valores informados NÃO podem formar um triângulo.";
        }
    }
    
    ?>
    
</body>
</html>