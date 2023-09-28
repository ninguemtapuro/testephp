<?php
    $booleano1 = true;
    $booleano2 = false;
    $booleano3 = true;

    if ($booleano1 and $booleano2)  {
        echo "Verdadeiro";
    }else   {
        //Resultado falso pois os valores das variaveis são diferentes
        echo "Falso";
    }

    if ($booleano1 or $booleano2)  {
        //Resultado é verdadeiro pois uma das variaveis é verdadeira
        echo "Verdadeiro";
    }else   {
        echo "Falso";
    }
    if ($booleano1 xor $booleano2)  {
        echo "Verdadeiro";
    }else   {
        //Resultado é falso pois os valores das variaveis são verdadeiras
        echo "Falso";
    }

    if (!$booleano2)  {
        //Resultado é verdadeiro pois o valor da variavel é falso
        echo "Verdadeiro";
    }else   {
        echo "Falso";
    }

    if ($booleano1 && $booleano3)  {
        //Resultado é verdadeiro pois ambos os valores das variaveis são verdadeiras
        echo "Verdadeiro";
    }else   {
        echo "Falso";
    }

    if ($booleano1 || !$booleano3)  {
        echo "Verdadeiro";
    }else   {
        //Resultado é falso pois o valor de ambas as variaveis foram invertidas
        echo "Falso";
    }

    ?>
    
    