<?php

class Car 
{
    private $color = 'red';
    private $numberOfTires = 4;
    public static $contry= "canada";
    public function __construct($color)
    {
        $this ->color = $color;
    }
    public function __destruct()
    {
        echo "Objeto está sendo destruido";
    }
    public function setColor($val)
    {
       $this->color = $val;
    }
        public function getColor()

        
    {
    return $this->color;
        // class propiedades e metodos 
    }
}
$bmw = new Car("write");
//echo $bmw->color;
echo $bmw-> getColor();
$bmw->setColor("black");
echo $bmw->getColor();
echo car ::$contry;

?>