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
        <label>Risco:</label>
        <select name="risco">
            <option value="B">Baixo</option>
            <option value="M">Médio</option>
            <option value="A">Alto</option>
        </select>
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
        $idade = $_POST['idade'];
        $gruporisco = $_POST['risco'];
        if ($idade < 17 || $idade > 70) {
            echo "Desculpe, $nome. A apólice de seguro só pode ser adquirida por pessoas entre 17 e 70 anos.";
        } else {
            $categoria = 0;
            if ($idade >= 17 && $idade <= 20) {
                if ($gruporisco == "Baixo") {
                    $categoria = 1;
                }elseif ($gruporisco == "Médio") {
                    $categoria = 2;
                }else {
                    $categoria = 3;
                } 
            } elseif ($idade >= 21 && $idade <= 24) {
                if ($gruporisco == "Baixo") {
                    $categoria = 2;
                }elseif ($gruporisco == "Médio") {
                    $categoria = 3;
                }else {
                    $categoria = 4;
                } 
            } elseif ($idade >= 25 && $idade <= 34) {
                if ($gruporisco == "Baixo") {
                    $categoria = 3;
                }elseif ($gruporisco == "Médio") {
                    $categoria = 4;
                }else {
                    $categoria = 5;
                }
            } elseif ($idade >= 35 && $idade <= 64) {
                if ($gruporisco == "Baixo") {
                    $categoria = 4;
                }elseif ($gruporisco == "Médio") {
                    $categoria = 5;
                }else {
                    $categoria = 6;
                }
            } else { 
                if ($gruporisco == "Baixo") {
                    $categoria = 7;
                }elseif ($gruporisco == "Médio") {
                    $categoria = 8;
                }else {
                    $categoria = 9;
                }
            }
        echo "Nome: $nome <br>";
        echo "Idade: $idade anos <br>";
        echo "Grupo de risco: $gruporisco <br>";
        echo "Categoria do seguro: $categoria";
        }
    }
    
    ?>
    
</body>
</html>