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
        $nota1 = $_POST['1nota'];
        $nota2 = $_POST['2nota'];
        $nota3 = $_POST['3nota'];
        $soma = (float)$nota1 + (float)$nota2 + (float)$nota3;
        $media = (float)$soma / 3;
        echo "Aluno(a): " . $nome . "<br>";
        echo "Média: " . $media;
    }
    
    ?>
</body>
</html>