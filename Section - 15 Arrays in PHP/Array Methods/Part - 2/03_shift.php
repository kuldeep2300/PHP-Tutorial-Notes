<?php
//* array_shift() method : Similar to pop method but instead of removing element from last index it will remove element from the starting of the array or we can say that from starting index.

$fruits = ["apple", "banana", "cherry"];
echo "<pre>";
print_r($fruits);
echo "</pre>";

array_shift($fruits);
echo "<pre>";
print_r($fruits);
echo "</pre>";

$removedElement = array_shift($fruits); // Removed first index element
echo "<pre>";
print_r($fruits);
echo "</pre>";

echo "<br> $removedElement <br>";