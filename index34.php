<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <form method="POST">
        <label>Digite a quantidade de horas/aula:</label>
        <input type="number" name="aula">
        <br>
        <label>Nível do professor:</label>
        <select name="niv">
            <option value="1">Professor Nível 1</option>
            <option value="2">Professor Nível 2</option>
            <option value="3">Professor Nível 3</option>
        </select>
        <br>
        <button type="submit">Calcular salário</button>
    </form>
    <br>

    <?php

    session_start();
    if (!isset($_SESSION['totaldesconto'])) {
        $_SESSION['totaldesconto'] = 0;
        $_SESSION['totalpago'] = 0;
    }
    if ($_POST) {
        $aula = (float)$_POST['aula'];
        $nivel = $_POST['niv'];
        $salario = 0;
        if ($nivel == 1) {
            $salario = $aula * 12.00;
            echo "R$12,00 por hora/aula <br>";
        }elseif ($nivel == 2) {
            $salario = $aula * 17.00;
            echo "R$17,00 por hora/aula <br>";
        } elseif ($nivel == 3) {
            $salario = $aula * 25.00;
            echo "R$25,00 por hora/aula <br>";
        };
        echo "Valor do salário: R$ " . $salario;
    }

    ?>

</body>
</html>