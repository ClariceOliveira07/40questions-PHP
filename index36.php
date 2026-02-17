<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
        <label>Consumo:</label>
        <input type="number" name="consumo">
        <br>
        <label>Tipo de cliente:</label>
        <select name="cliente">
            <option value="1">1: Residência</option>
            <option value="2">2: Comércio</option>
            <option value="3">3: Indústria</option>
        </select>
        <br>
        <button type="submit">Enviar</button>
    </form>
    <br>

    <?php

    if ($_POST){
        $consumokwh = $_POST['consumo'];
        $tipocliente = $_POST['cliente'];
        $valorkwh = 0;
        $descricaotipo = "";
        switch ($tipocliente) {
            case 1:
                $valorkwh = 0.60;
                $descricaotipo = "Residência";
                break;
            case 2:
                $valorkwh = 0.48;
                $descricaotipo = "Comércio";
                break;
            case 3:
                $valorkwh = 1.29;
                $descricaotipo = "Indústria";
                break;
            default:
                echo "Tipo de cliente inválido.";
                exit;
        }
        $valortotal = $consumokwh * $valorkwh;
        echo "Tipo de cliente: $descricaotipo <br>";
        echo "Consumo: $consumokwh KW/h <br>";
        echo "Valor por KW/h: R$ " . $valorkwh . "<br>";
        echo "Valor total a pagar: R$ " . $valortotal;
    }

?>
    
</body>
</html>