<?php

// Default / Optional Parameters - If a function not passing any argument value then the default value will be set, or when the person passing the argument then this argument set as value and will be printed on the screen.
function display_names($name = "Kuldeep") {
    echo "$name <br>";
}
/* 
display_names("Kelash");
display_names(); */

//* Function to add 2 numbers

function sum($a = 10, $b = 6) {   // If we want to pass only one value when calling then it last parameter should be default otherwise it gives error.
    echo $a + $b . "<br>";

}

// sum(10); // When I pass only single value then it will override the a's default value.

sum(15, 14); // Here it will override both a's and b's default values.