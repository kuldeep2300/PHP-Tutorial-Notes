<?php

//* What are constants : Constants are basically a value which will not be changing throught the program.

// Rule - Whenever you are defining constant write in capital letter for differentiate between variable and constant. We can write constant name in single and double quotes.

/* Syntax to define basic constant

define(name, value); // use define() function take 2 arguement first - constant name, second - its value.
 */

define('PI', 3.14);

// echo 'PI';   // We should not wrap constant variable inside single or double quote it will treated as a text, meaning constant not support string interpolation.
// echo "PI";
 
// echo PI;

define("GREETINGS", "Hello Students");

// echo GREETINGS;

//* We can't change constant value, and not write $ it will throw error. Constants have global scope meaning they can be accessed anywhere inside the script, even also inside the function.

function hello() {
    echo GREETINGS;
}

// hello();

//* Different way to print constant

$greeting = GREETINGS;

echo "$greeting"; // Using string interpolation.
