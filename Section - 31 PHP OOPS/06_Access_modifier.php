<?php

//* PHP - Access Modifiers
/* Properties and methods can have access modifiers which control where they can be accessed.

There are three access modifiers:

public - the property or method can be accessed from everywhere. This is default
protected - the property or method can be accessed within the class and by classes derived from that class
private - the property or method can ONLY be accessed within the class

In the following example we have added three different access modifiers to three properties (name, color, and weight). Here, if you try to set the name property it will work fine (because the name property is public, and can be accessed from everywhere). 
However, if you try to set the color or weight property it will result in a fatal error (because the color and weight property are protected and private): */

//* Example - 1
/* class Fruit {
    public $name;
    protected $color;
    private $weight;
}

$apple = new Fruit();

$apple->name = "Apple"; // OK     
echo $apple->name;
// $apple->color = "Red";    // ERROR
// $apple->weight = "50g";   // ERROR */

//* Example - 2

class Fruit {
    public $name;
    protected $color;
    private $weight;

    // Methods
    function set_name($n) { // Public function (default)
        $this->name = $n;
    }

    protected function set_color($n) {  // A Protected Function
        $this->color = $n;
    } 

    private function set_weight($n) {   // A Private Function
        $this->weight = $n;
    } 
}

$apple = new Fruit();

$apple->set_name('Apple');      // OK
// $apple->set_color('Red');    // ERROR
// $apple->set_weight('50g');   // ERROR


