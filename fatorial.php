<?php
function calcularFatorial($n)
{
    $fatorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fatorial *= $i;
    }
    return $fatorial;
}

$casasTabuleiro = 64;
$resultado = calcularFatorial($casasTabuleiro);

echo "O fatorial de $casasTabuleiro é: $resultado";
?>