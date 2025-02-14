<?php
//* array_pop() method : This method pop or remove last element from the array.

$fruits = ["apple", "mango", "banana"];
echo "<pre>";
print_r($fruits);
echo "</pre>";

array_pop($fruits); 
echo "<pre>";
print_r($fruits);
echo "</pre>";

$removedElement = array_pop($fruits); // It will return the pop out element.
echo "<br>";
echo $removedElement;

echo "<pre>";
print_r($fruits);
echo "</pre>";
