<?php
//* array_map() method : Most used array method is map method. The array_map() function in PHP applies a given callback function to each element of one or more arrays and returns a new array with the modified values. It is useful for transforming array elements without using loops. 

$numbers = [1, 2, 3, 4, 5];
echo "<pre>";
print_r($numbers);
echo "</pre>";
/* 
function squareNumbers($values) {
    return $values ** 2;
}

$squareNumber = array_map('squareNumbers', $numbers);
echo "<pre>";
print_r($squareNumber);
echo "</pre>"; */

//? We can also write callback function in map method like anonymous function.
//? Example - 2

$squareNumber = array_map(function ($values){
    return $values ** 3;
}, $numbers);

echo "<pre>";
print_r($squareNumber);
echo "</pre>";