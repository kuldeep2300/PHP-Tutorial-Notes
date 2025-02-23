<?php

//* Define Objects
/* Classes are nothing without objects! We can create multiple objects from a class. Each object has all the properties and methods defined in the class, but they will have different property values.

Objects of a class are created using the new keyword.

In the example below, $apple and $banana are instances of the class Fruit: */

class Fruit {
    // Properties
    public $name;
    public $color;

    // Method
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}

$apple = new Fruit();
$banana = new Fruit();

$apple->set_name('Apple');
$banana->set_name('Banana');

// Printing Data
echo $apple->get_name();
echo "<br>";
echo $banana->get_name();