<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <form method="POST">
        <label>Digite a idade do nadador:</label>
        <input type="number" name="idade">
        <br>
        <button type="submit">Classificar</button>
   </form> 
   <br>

<?php

    if ($_POST) {
        $idade = (int)$_POST['idade'];
        if ($idade >= 5 && $idade <= 7) {
            echo "Categoria: Infantil A";
        } elseif ($idade >= 8 && $idade <= 10) {
            echo "Categoria: Infantil B";
        } elseif ($idade >= 11 && $idade <= 13) {
            echo "Categoria: Juvenil A";
        } elseif ($idade >= 14 && $idade <= 17) {
            echo "Categoria: Juvenil B";
        } elseif ($idade >= 18 && $idade <= 25) {
            echo "Categoria: Sênior";
        } else {
            echo "Idade fora da faixa etária";
        }
    }

    ?>   

</body>
</html>