<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo "<pre>";
print_r($numbers);
echo "</pre>";

function oddNumbers($value) {
    return ($value % 2) !== 0;
}

$oddNumber = array_filter($numbers, 'oddNumbers');
echo "<pre>";
print_r($oddNumber);
echo "</pre>";

function evenNumbers($value) {
    return ($value % 2) === 0;
}

$evenNumber = array_filter($numbers, 'evenNumbers');
echo "<pre>";
print_r($evenNumber);
echo "</pre>";

echo "<br> Using anonymous function <br>";
$evenSeries = array_filter($numbers, function($value) {
    return ($value % 2) === 0;
});

echo "<pre>";
print_r($evenSeries);
echo "</pre>";
