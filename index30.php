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
        <label>Idade:</label>
        <input type="number" name="idade">
        <br>
        <label>Sexo:</label>
        <select name="sexo">
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select>
        <br>
        <label>Salário Fixo (R$):</label>
        <input type="number" name="salariofixo" step="0.01">
        <br>
        <button type="submit">Calcular salário líquido</button>
    </form>
    <br>

    <?php
    if ($_POST) {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $sexo = $_POST['sexo'];
        $salariofixo = (float)$_POST['salariofixo'];
        $desconto = $salariofixo * 0.10;
        $salarioliquido = $salariofixo - $desconto;
        echo "Nome do Funcionário: " . $nome . "<br>";
        echo "Salário Líquido: R$ " . $salarioliquido . "</b>";
    }

    ?>  
      
</body>
</html>