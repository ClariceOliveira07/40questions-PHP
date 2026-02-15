<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
        <label>Digite os nomes das pessoas (separados por espaço):</label>
        <input type="list" name="nomes" step="0.1">
        <br>
        <label>Digite o sexo das pessoas (F ou M, separados por espaço):</label>
        <input type="list" name="sexos" step="0.1">
        <br>
        <button type="submit">Enviar dados</button>
    </form>
    <br>

    <?php

    if ($_POST){
        $texton = $_POST['nomes'];
        $textos = $_POST['sexos'];
        $listan= explode(" ", $texton);
        $listas= explode(" ", $textos);
        $cont = 0;
        $hom = 0;
        $mul = 0;
        foreach ($listan as $indice => $nome) {
            $nome = trim($nome); 
            $sexo = isset($listas[$indice]) ? strtoupper(trim($listas[$indice])) : "";
            if ($nome != "") {
                $cont++;
            if ($sexo == "M" || $sexo == "m") {
                echo "Pessoa $cont: $nome - Homem <br>";
                $hom++;
            } elseif ($sexo == "F" || $sexo == "f") {
                echo "Pessoa $cont: $nome - Mulher <br>";
                $mul++;
            } else {
                echo "Pessoa $cont: $nome - Sexo não identificado <br>";
            }
            }
            if ($cont == 56) {
                break;
            }

        }

        echo "Total de pessoas: $cont <br>";
        echo "Total de Homens: $hom <br>";
        echo "Total de Mulheres: $mul <br>";

    }

    ?>

</body>
</html>