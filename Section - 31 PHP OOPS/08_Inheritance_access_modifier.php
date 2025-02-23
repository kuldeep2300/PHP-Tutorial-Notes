<?php

//* PHP - Inheritance and the Protected Access Modifier
/* In the previous chapter we learned that protected properties or methods can be accessed within the class and by classes derived from that class. What does that mean? */

class Fruit {
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    protected function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

class Strawberry extends Fruit {
    public function message() {
        echo "Am I a apple or a berry ?";
    }
}

$strawberry = new Strawberry('Apple', 'Red'); // OK. __construct() is public 
$strawberry->message(); // OK. message() is public 
echo "<br>";
$strawberry->intro();   // ERROR. intro() is protected (We can't call protected method or properties from the global scope we can only call it from within the class and within the derived classes only).