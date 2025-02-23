<?php

//* PHP - Overriding Inherited Methods
/* Inherited methods can be overridden by redefining the methods (use the same name) in the child class.

Look at the example below. The __construct() and intro() methods in the child class (Strawberry) will override the __construct() and intro() methods in the parent class (Fruit): */

class Fruit {
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

class Strawberry extends Fruit {
    public $weight;

    // Constructor overriding
    public function __construct($name, $color, $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    // Function overriding
    public function intro()
    {
        echo "The fruit is {$this->name}, the color is {$this->color} and the weight is {$this->weight} gram.";
    }
}

$strawberry = new Strawberry('Apple', 'Red', 240);
$strawberry->intro();