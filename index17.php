<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
        <label>Digite os números (separados por espaço):</label>
        <input type="list" name="lista" step="0.1">
        <br>
        <button type="submit">Enviar números</button>
    </form>
    <br>

    <?php

    if ($_POST){
        $num = $_POST['lista'];
        $numeros = explode(" ", $num);
        $cont = 0;
        foreach ($numeros as $item) {
            $n = trim($item); 
            if (is_numeric($n)) {
                if ($n >= 10 and $n <= 150) {
                    $cont = $cont + 1;
                }
            }
            if ($cont == 80) {
                break;
            }
        }
    echo "A quantidade de números no intervalo [10, 150]: " . $cont;
    }

    ?>

</body>
</html>