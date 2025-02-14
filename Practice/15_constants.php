<?php

// declare constants
define("PI", 3.14);

// echo "PI"; // This is wrong
// echo 'PI';  // This is also wrong.

echo PI;

echo "<br>";
define("GREETINGS", "Hello World");
echo GREETINGS;


function display_data()
{
    echo "<br>Inside function GREETINGS constant value : " . GREETINGS . "<br>";
    echo "Inside function PI constant value : " . PI . "<br>";
}

display_data();

// Same name of variable and constant
$PI = 3.1111;

echo "<br><br>";
echo $PI . " - " . PI;

echo "<br><br><br>";

echo constant('GREETINGS') . "<br>";
echo constant('PI');
