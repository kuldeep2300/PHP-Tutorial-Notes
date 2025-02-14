<?php

$number = [1, 2, 3, 4, 5, 6, 7, 8];

echo "<pre>";
print_r($number);
echo "</pre>";

/* function squareNumbers($value) {
    return $value ** 2;
}

$squareNumber = array_map('squareNumbers', $number);
echo "<pre>";
print_r($squareNumber);
echo "</pre>"; */

$squareNumber = array_map(function($value) {
    return $value ** 3;
}, $number);

echo "<pre>";
print_r($squareNumber);
echo "</pre>";
