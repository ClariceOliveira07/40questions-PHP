<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
        <label>Digite os salários das pessoas (separados por espaço):</label>
        <input type="list" name="salarios" step="0.1">
        <br>
        <button type="submit">Enviar</button>
    </form>
    <br>

    <?php

        if ($_POST) {
        $minimo = 1.621;
        $textosalarios = $_POST['salarios'];
        $listasalarios = explode(" ", $textosalarios);
        foreach ($listasalarios as $indice => $salario) {
            $salario = trim($salario);
            if ($salario == "") {
                continue;
            }
            if ($salario < ($minimo * 3)) {
                $percentual = 0.50;
            } elseif ($salario <= ($minimo * 10)) {
                $percentual = 0.20; 
            } elseif ($salario <= ($minimo * 20)) {
                $percentual = 0.15; 
            } else {
            $percentual = 0.10;
            }
            $novosalario = $salario + ($salario * $percentual);
            $num = $indice + 1;
            echo "Funcionário $num: Salário R$ $salario > Novo Salário: R$ $novosalario <br>";
            if ($num == 584) {
                break;
            }
          }
        }

    ?>

</body>
</html>