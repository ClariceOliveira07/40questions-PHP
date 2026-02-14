<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
        <label>Digite as idades (separados por espaço):</label>
        <input type="list" name="idades" step="0.1">
        <br>
        <button type="submit">Enviar idades</button>
    </form>
    <br>

    <?php

    if ($_POST){
        $texto = $_POST['idades'];
        $lista= explode(" ", $texto);
        $cont = 0;
        foreach ($lista as $valor) {
            $idade = trim($valor); 
            if (is_numeric($idade)) {
                $cont += 1;
                if ($idade >= 18) {
                    echo "Pessoa $cont: Idade $idade - Maior de idade <br>";
                } else {
                    echo "Pessoa $cont: Idade $idade - Menor de idade <br>";
                }
            }
            if ($cont == 75) {
                break;
            }
        }
    echo "Foi analisado a idade de $cont pessoas";
    }

    ?>

</body>
</html>