<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculadora</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Calculadora</h1>
<form method="post">
    <label for="num1">Número 1:</label>
    <input type="number" name="num1" id="num1" required>
    <br>
    <label for="num2">Número 2:</label>
    <input type="number" name="num2" id="num2" required>
    <br>
    <label for="operador">Operação:</label>
    <select name="operador" id="operador" required>
        <option value="+">Adição</option>
        <option value="-">Subtração</option>
        <option value="*">Multiplicação</option>
        <option value="/">Divisão</option>
    </select>
    <br>
    <input type="submit" value="Calcular">
</form>
<?php
if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operador'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operador = $_POST['operador'];
    switch($operador) {
        case '+':
            $resultado = $num1 + $num2;
            echo "<script>alert('O resultado da adição é: $resultado');</script>";
            break;
        case '-':
            $resultado = $num1 - $num2;
            echo "<script>alert('O resultado da subtração é: $resultado');</script>";
            break;
        case '*':
            $resultado = $num1 * $num2;
            echo "<script>alert('O resultado da multiplicação é:  $resultado');</script>";
            break;
        case '/':
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
                echo "<script>alert('O resultado da divisão é: $resultado');</script>";
            } else {
                echo "<script>alert('impossivel dividir por zero!');</script>";
            }
            break;
        default:
            $resultado = 0;
            break;
    }
}
?>
</body>
</html>
