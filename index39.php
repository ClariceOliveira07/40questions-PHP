<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
        <label>Nome do(a) aluno(a):</label>
        <input type="text" name="nomealu">
        <br>
        <label>Número de matrícula:</label>
        <input type="number" name="matri" step="0.1">
        <br>
        <label>1° nota:</label>
        <input type="number" name="1nota" step="0.1">
        <br>
        <label>2° nota:</label>
        <input type="number" name="2nota" step="0.1">
        <br>
        <label>3° nota:</label>
        <input type="number" name="3nota" step="0.1">
        <br>
        <button type="submit">Enviar</button>
    </form>
    <br>

    <?php

    if ($_POST){
        $nome = $_POST['nomealu'];
        $matri = $_POST['matri'];
        $nota1 = $_POST['1nota'];
        $nota2 = $_POST['2nota'];
        $nota3 = $_POST['3nota'];
        $soma = (float)$nota1 + (float)$nota2 + (float)$nota3;
        $media = (float)$soma / 3;
        echo "Aluno(a): " . $nome . "<br>";
        echo "Matrícula: " . $matri . "<br>";
        echo "Média: " . $media . "<br>";
        if ($media >= 8 && $media <= 10){
            echo "Classificação: A";
        } elseif ($media >= 7 && $media <= 7.9){
            echo "Classificação: B";
        } elseif ($media >= 6 && $media <= 6.9){
            echo "Classificação: C";
        } elseif ($media >= 5 && $media <= 5.9){
            echo "Classificação: D";
        } elseif ($media >= 0 && $media <= 4.9){
            echo "Classificação: R";
        }
    }
    
    ?>
    
</body>
</html>