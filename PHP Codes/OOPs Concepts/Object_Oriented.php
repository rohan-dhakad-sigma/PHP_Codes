<?php

class Display {
    private $name;

    public function sayHello($name)
    {
        echo "Dhakad $name!";
    }
}

$obj = new Display();
$obj->$name = "Kamal !";

echo ($obj->$name);
echo "<br>";

$obj->sayHello("Vinashak");


?>