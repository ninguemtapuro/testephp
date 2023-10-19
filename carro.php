<?php

    include("Classes/carro.class.php");

    $carro0 = new carro();

    $carro0->ano    ="2012";
    $carro0->modelo ="C4 VTR";
    $carro0->cor    ="Preto";
    $carro0->fabricante ="Citroen";
    $carro0->status ="Disponivel";

    $carro1 = new carro();

    $carro1->ano    ="2014/2015";
    $carro1->modelo ="Corcel 2";
    $carro1->cor    ="Amarelo";
    $carro1->fabricante ="Ford";
    $carro1->status ="Indisponivel";

    $carro2 = new carro();

    $carro2->ano    ="2024";
    $carro2->modelo ="BMW Série 3";
    $carro2->cor    ="Cinza";
    $carro2->fabricante ="BMW";
    $carro2->status ="Disponivel";

    $carro3 = new carro();

    $carro3->ano    ="2023";
    $carro3->modelo ="Maserati GranTurismo";
    $carro3->cor    ="Marrom";
    $carro3->fabricante ="Maserati";
    $carro3->status ="Disponivel";

    $carro4 = new carro();

    $carro4->ano    ="2019";
    $carro4->modelo ="Ferrari Roma ";
    $carro4->cor    ="Vermelha";
    $carro4->fabricante ="Ferrari";
    $carro4->status ="Disponivel";

    $carro5 = new carro();

    $carro5->ano    ="2011";
    $carro5->modelo ="Lamborghini Aventador ";
    $carro5->cor    ="Azul";
    $carro5->fabricante ="Lamborghini";
    $carro5->status ="Disponivel";


    echo "Carro ". $carro0->status . ": <br/><br/>";

    echo "Fabricante de carro: ". $carro0->fabricante . "<br/>
    modelo: ". $carro0->modelo ."<br/>
    de Cor:".$carro0->cor ."<br />
    Ano:" . $carro0->ano . "<br /><hr>";

    echo "Carro ". $carro1->status . ": <br/><br/>";

    echo "Fabricante de carro: ". $carro1->fabricante . "<br/>
    modelo: ". $carro1->modelo ."<br/>
    de Cor:".$carro1->cor ."<br />
    Ano:" . $carro1->ano . "<br /><hr>";

    echo "Carro ". $carro2->status . ": <br/><br/>";

    echo "Fabricante de carro: ". $carro2->fabricante . "<br/>
    modelo: ". $carro2->modelo ."<br/>
    de Cor:".$carro2->cor ."<br />
    Ano:" . $carro2->ano . "<br /><hr>";

    echo "Carro ". $carro3->status . ": <br/><br/>";

    echo "Fabricante de carro: ". $carro3->fabricante . "<br/>
    modelo: ". $carro3->modelo ."<br/>
    de Cor:".$carro3->cor ."<br />
    Ano:" . $carro3->ano . "<br /><hr>";

    echo "Carro ". $carro4->status . ": <br/><br/>";

    echo "Fabricante de carro: ". $carro4->fabricante . "<br/>
    modelo: ". $carro4->modelo ."<br/>
    de Cor:".$carro4->cor ."<br />
    Ano:" . $carro4->ano . "<br /><hr>";

    echo "Carro ". $carro5->status . ": <br/><br/>";

    echo "Fabricante de carro: ". $carro5->fabricante . "<br/>
    modelo: ". $carro5->modelo ."<br/>
    de Cor:".$carro5->cor ."<br />
    Ano:" . $carro5->ano . "<br /><hr>";

    ?>