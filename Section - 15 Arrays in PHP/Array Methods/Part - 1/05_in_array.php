<?php
//* in_array() method : This function is mostly used to check that a particular element is present inside the array or not, it return boolean result, if the element present inside the array then it will be return true & print 1 otherwise it will return false & print nothing.

$fruits = ["apple", "banana", "cherry", "data", "elderberry"];

echo in_array("applee", $fruits) ? "Element is present" : "Element is not present";