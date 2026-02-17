<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
        <label>Nota do laboratório:</label>
        <input type="number" name="1nota" step="0.1">
        <br>
        <label>Nota da avaliação semestral:</label>
        <input type="number" name="2nota" step="0.1">
        <br>
        <label>Nota do exame final:</label>
        <input type="number" name="3nota" step="0.1">
        <br>
        <button type="submit">Enviar</button>
    </form>
    <br>

    <?php

    if ($_POST){
        $notalab = $_POST['1nota'];
        $notaaval   = $_POST['2nota'];
        $notaexa  = $_POST['3nota'];
        $pesolab   = 2;
        $pesoaval   = 3;
        $pesoexa = 5;
        $notafinal = (((float)$notalab * $pesolab) + ((float)$notaaval * $pesoaval) + ((float)$notaexa * $pesoexa)) / 10;
        echo "Trabalho de laboratório (Peso 2): " . $notalab . "<br>";
        echo "Avaliação semestral (Peso 3): " . $notaaval . "<br>";
        echo "Exame final (Peso 5): " . $notaexa . "<br>";
        echo "Média final: " . $notafinal . "<br>";
    }
    
?>
    
</body>
</html>