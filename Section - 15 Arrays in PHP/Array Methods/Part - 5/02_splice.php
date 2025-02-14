<?php

//* 2) array_splice() method : This method remove a portion of the array and replace it with something else, it will return an array of elemenet which are deleted from the original array.
/* It take 4 arguments.
1) 1st argument is the array in which we are making replacement.
2) 2nd argument is the index from where we are starting the replacement.
3) 3rd argument is the length meaning how many element from the given index should be replaced.
4) 4th argument take an array which contain replacement data.
*/


$fruits = ["apple", "banana", "cherry", "elderberry", "kiwi"];

echo "<pre>";
print_r($fruits);
echo "</pre>";

$copyFruits = $fruits;

/* $removedElement = array_splice($copyFruits, 1, 3, ["watermelon", "orange", "papaya"]);
echo "<pre>";
print_r($copyFruits);
echo "</pre>"; */

$removedElement = array_splice($copyFruits, 1, 1); // Remove a particular element
echo "<pre>";
print_r($copyFruits);
echo "</pre>";