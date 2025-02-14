<?php
//* empty() method : It is used to check that a variable is empty or not, it will return boolean result if empty return true & print 1 otherwise return false & print nothing.

$data = [];
$fruits = ["apple", "banana"];

echo empty($data) ? "Array is empty" : "Array is not empty";
echo "<br>";
echo empty($fruits) ? "Array is empty" : "Array is not empty";