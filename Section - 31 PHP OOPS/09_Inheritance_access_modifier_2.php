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
        echo "Am I a apple or a berry ? <br>";
         // Call protected method from within derived class - OK
        $this->intro();
    }
}

$strawberry = new Strawberry('Apple', 'Red'); // OK. __construct() is public 
$strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class
