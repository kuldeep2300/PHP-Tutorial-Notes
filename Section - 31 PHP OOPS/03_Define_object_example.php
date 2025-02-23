<?php

class Fruit {
    // Properties
    public $name;
    public $color;

    // Methods
    //* PHP - The $this Keyword
    // The $this keyword refers to the current object, and is only available inside methods.
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }

    function set_color($color) {    // We can either use setter or can give directly value by object ($apple->name = "Apple")
        $this->color = $color;
    }

    function get_color() {
        return $this->color;
    }
}

$apple = new Fruit();

$apple->set_name('Apple');
$apple->set_color('Red');

echo 'Name : ' . $apple->get_name() . ', ';
echo 'Color : ' . $apple->get_color() . '<br>';

$banana = new Fruit();

$banana->set_name('Banana');
$banana->set_color('Yellow');

echo 'Name : ' . $banana->get_name() . ', ';
echo 'Color : ' . $banana->get_color() . '<br>';

//* PHP - instanceof
// You can use the instanceof keyword to check if an object belongs to a specific class:

var_dump($apple instanceof Fruit);
var_dump($banana instanceof Fruit);