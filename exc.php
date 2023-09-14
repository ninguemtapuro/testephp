<?php
$num01 = filter_input(INPUT_POST,"txtNumero1");
$num02 = filter_input(INPUT_POST,"txtNumero2");
$opera = filter_input(INPUT_POST,"slOperacao");
$resul = "";

if($num01 && $num01){
    switch($opera){
        case "+":
        $resul = ($num01 + $num01);
        break;
        case "-":
        $resul = ($num01 - $num02);
        break;
        case "*":
        $resul = ($num01 * $num02);
        break;
        case "/":
        $resul = ($num01 / $num02);
        break;
    }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charser="utf-8">
        <title>Operações</title>
    <style>
        input, select {padding: 10px; margin: 5px;}
        </style>
</head>

<body>
    <?=$resul;?>
    <form method="post">
        <label>Numero 1: <input type="text" name="txtNumero1"/></label><br>
        <label>Numero 2: <input type="text" name="txtNumero2"/></label><br>
        <label>Operações:
            <select name="slOperacao">
            <option value="+">Adição</option>
            <option value="-">Subtração</option>
            <option value="*">Multiplicação</option>
            <option value="/">Divisão</option>
        
            </select>
        </label><br>
        <input type="submit" name="btnCalcular" value="Calcular">
    </form>
</body>
</html>