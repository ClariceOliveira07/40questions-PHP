<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
        <label>Nome:</label>
        <input type="text" name="nome">
        <br>
        <label>Sexo:</label>
        <select name="sexo">
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select>
        <br>
        <label>Altura:</label>
        <input type="number" name="altura" step="0.1">
        <br>
        <label>Idade:</label>
        <input type="number" name="idade">
        <br>
        <button type="submit">Enviar</button>
    </form>
    <br>

    <?php

    if ($_POST){
        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $altura = $_POST['altura'];
        $idade = $_POST['idade'];
        echo "Nome: " . $nome . "<br>";
        echo "Sexo: " . $sexo . "<br>";
        echo "Altura: " . (float)$altura . "<br>";
        echo "Idade: " . $idade . "<br>";
        $pesoideal = 0;
        if ($sexo == "M") {
            if ((float)$altura > 1.70) {
                if ($idade <= 20) {
                    $pesoideal = (72.7 * (float)$altura) - 58;
                    echo "Peso ideal: " . $pesoideal; 
                } elseif ($idade >= 21 && $idade <= 39) {
                    $pesoideal = (72.7 * (float)$altura) - 53;
                    echo "Peso ideal: " . $pesoideal;
                } else {
                    $pesoideal = (72.7 * (float)$altura) - 45;
                    echo "Peso ideal: " . $pesoideal;
                }
            } else { 
                if ($idade <= 40) {
                    $pesoideal = (72.7 * (float)$altura) - 50;
                    echo "Peso ideal: " . $pesoideal;
                } else { 
                    $pesoideal = (72.7 * (float)$altura) - 58;
                    echo "Peso ideal: " . $pesoideal;
                }
            }
        } elseif ($sexo == "F") {
            if ($altura > 1.50) {
                $pesoideal = (62.1 * (float)$altura) - 44.7;
                echo "Peso ideal: " . $pesoideal;
            } else { 
                if ($idade >= 35) {
                    $pesoideal = (62.1 * (float)$altura) - 45;
                    echo "Peso ideal: " . $pesoideal;
                } else { 
                    $pesoideal = (62.1 * (float)$altura) - 49;
                    echo "Peso ideal: " . $pesoideal;
                }
            }
        }   
    }
    
    ?>
    
</body>
</html>