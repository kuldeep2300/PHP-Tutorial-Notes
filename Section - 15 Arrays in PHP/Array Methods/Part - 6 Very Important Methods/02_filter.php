<?php

//* array_filter() method : The array_filter() function in PHP filters elements of an array using a callback function and returns a new array containing only the elements for which the callback returns true. If no callback is provided, it removes false-like values (e.g., 0, null, false, "").

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "<pre>";
print_r($numbers);
echo "</pre>";

//* Even Numbers
function evenNumbers($values) {
    return $values % 2 == 0;
}

echo "Even Numbers array <br>";
$evenNumber = array_filter($numbers, 'evenNumbers');
echo "<pre>";
print_r($evenNumber);
echo "</pre>";

//* Odd Numbers
function oddNumbers($values) {
    return $values % 2 != 0;
}

echo "Odd Numbers array <br>";
$oddNumber = array_filter($numbers, 'oddNumbers');
echo "<pre>";
print_r($oddNumber);
echo "</pre>";

//* Using anonymous function
echo "Using Anonymous Function <br>";
$oddNumberAnotherWay = array_filter($numbers, function($values){
    return $values % 2 != 0;
});

echo "<pre>";
print_r($oddNumberAnotherWay);
echo "</pre>";









