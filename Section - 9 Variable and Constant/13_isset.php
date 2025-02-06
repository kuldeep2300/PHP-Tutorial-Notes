<!--//* isset() function

This function basically return true or false (boolean value), it determine that a variable is declare and different than NULL.
-->

<?php

$age;
// echo $age;     // If I directly print this then it will return error that's why we use isset() function.

if(isset($age)) {
    echo "$age Variable is set.";
} else {
    echo "Variable is not set.";
}

$fruit = "mango";
$ref = $fruit;  // By passing a reference

if(isset($ref)) {
    echo "$ref Variable is set.";
} else {
    echo "Variable is not set.";
}