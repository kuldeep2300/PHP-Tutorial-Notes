<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "<pre>";
print_r($numbers);
echo "</pre>";

function sumOfNumbers($acc, $value) {
    return $acc += $value;
}

$sum = array_reduce($numbers, 'sumOfNumbers');

echo "Sum of 10 numbers : $sum";

// Factoria 1 to 5
echo "<br>";

$factSeries = [1, 2, 3, 4, 5];

$fact = array_reduce($factSeries, function($acc, $value) {
    return $acc *= $value;
}, 1);

echo "Factorial of 5 : $fact";