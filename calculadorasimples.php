<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="num1">Número 1:</label>
        <input type="text" name="num1" id="num1" required><br><br>

        <label for="num2">Número 2:</label>
        <input type="text" name="num2" id="num2" required><br><br>

        <input type="submit" name="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        if (is_numeric($num1) && is_numeric($num2)) {
            echo "<h2>Resultados:</h2>";
            echo "Número 1: $num1<br>";
            echo "Número 2: $num2<br><br>";

            echo "Soma: " . ($num1 + $num2) . "<br>";
            echo "Subtração: " . ($num1 - $num2) . "<br>";
            echo "Multiplicação: " . ($num1 * $num2) . "<br>";

            if ($num2 != 0) {
                echo "Divisão: " . ($num1 / $num2) . "<br>";
                echo "Resto da Divisão: " . ($num1 % $num2) . "<br>";
            } else {
                echo "Divisão por zero não é permitida.<br>";
            }
        } else {
            echo "<h2>Erro:</h2>";
            echo "Por favor, insira apenas valores numéricos.";
        }
    }
    ?>
</body>
</html>