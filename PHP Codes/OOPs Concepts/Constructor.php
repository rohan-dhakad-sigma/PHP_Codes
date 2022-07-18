<?php

class Fruit {
    public $name, $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function getName()
    {
        return $this->name;
    }

    function getColor()
    {
        return $this->color;
    }
}

$apple = new Fruit("Banana","Yellow");
echo $apple->getName();

echo " is in color: ";

echo $apple->getColor();

?>