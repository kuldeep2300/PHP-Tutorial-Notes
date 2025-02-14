<?php

//* array_reduce() method : The array_reduce() function in PHP iteratively reduces an array to a single value using a callback function. It processes each element and accumulates a result, which is returned at the end.

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo "<pre>";
print_r($numbers);
echo "</pre>";

/* 
function addNumbers($acc, $values) { // If in array_reduce() method we don't give 3rd argument then accumulator value will be equal to index 0 and value will be index 1, it will work properly.
    return $acc + $values;
}
$addNumber = array_reduce($numbers, 'addNumbers');

echo "Sum of first 10 numbers : $addNumber";

 */

function addNumbers($acc, $values) { // If in array_reduce() method we give 3rd argument then accumulator value will be start from value equal to 0 and value will be index 0, it will work properly.
    return $acc + $values;
}
$addNumber = array_reduce($numbers, 'addNumbers', 0);

echo "Sum of first 10 numbers : $addNumber";
echo "<br>";

//* Factorial Logic Using Reduce

$data = [1,2,3,4,5];

function factorialOfFive($acc, $values) {
    return $acc * $values;
}
$factorial = array_reduce($data, 'factorialOfFive', 1);

echo "Factorial of 5 : $factorial";
