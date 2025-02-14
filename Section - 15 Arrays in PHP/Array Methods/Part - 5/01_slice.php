<?php
//* 1) array_slice() method : This method have 3 arguments, 2 are essential, first is array from which we want to slice the data, 2nd is array where we give length from where we want to slice, and 3rd is boolean optional, default it is false, when we set it to true then it will reserved our original indexes even after data is sliced.

$fruits = ["apple", "banana", "cherry", "pineapple", "grapes"];
echo "<pre>";
print_r($fruits);
echo "</pre>";

/* $slicedData = array_slice($fruits, 2);
echo "<pre>";
print_r($slicedData);
echo "</pre>";
 */

/*//? $slicedData = array_slice($fruits, 1, 3); // I want to slice an array from banana to pineapple then, and it will print last index also okay
echo "<pre>";
print_r($slicedData);
echo "</pre>";
 */

/* $slicedData = array_slice($fruits, 1, 4, true);
echo "<pre>";
print_r($slicedData);
echo "</pre>"; */