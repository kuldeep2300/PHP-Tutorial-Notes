<?php

/* Objects : 

Objects are instance of classes, and classes are basically blueprint which will be having propertie and behaviours.

*/

class Fruit
{
    // Properties
    public $color;

    // Behaviours
    public function cutPieces()
    {
        echo "Cut 2 pieces";
    }
}

// Instance or an object of class
$apple = new Fruit();
var_dump($apple);

// Change or update value of class variable using object
$apple->color = "Red";
echo $apple->color;
var_dump($apple);

// Call the functions of class using object
$apple->cutPieces();
