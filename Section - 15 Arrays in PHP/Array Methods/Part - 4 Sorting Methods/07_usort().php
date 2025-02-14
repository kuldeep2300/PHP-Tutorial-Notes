<?php

//* 7) usort() method : Sort an array by values using a user - friendly comparison function.

$numbers = [4, 2, 8, 1, 5, 0];

echo "<pre>";
print_r($numbers);
echo "</pre>";

$copyNumbers = $numbers;
echo "Sort Array in ascending using : usort() <br>";

function compareNumbers($a, $b) {
    // Logic for ascending order
    // return $a - $b;
    // Logic for descending order
    return $b - $a;
}
usort($copyNumbers, "compareNumbers");

echo "<pre>";
print_r($copyNumbers);
echo "</pre>";

