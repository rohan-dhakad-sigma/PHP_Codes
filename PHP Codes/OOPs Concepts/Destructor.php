<?php
class Fruit {
    public $name;
    public $color;

    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    function __destruct() {
        echo "The fruit is {$this->name}.";
        echo "<br>";
        echo "Fruit's color is {$this->color}.";
    }
}

$apple = new Fruit("Apple","Green");

?>