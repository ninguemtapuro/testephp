<?php

    $numero = 5;
    $none = "";

    switch($numero) {
        case 4:
            echo"O numero é igual a 4 <br>";
            break;
            
            case 5:
                echo"O numero é igual a 5 <br>";
                break;
            default:
            echo"o numero não corresponde aos valores <br>";
    }
    switch($none){
        case"Rosana":
            echo"O nome é Rosana";
            break;

            case"Isis":
                echo"O nome é Isis";
                break;

                default:
                echo "O nome foi encontrado";
    }
    ?>