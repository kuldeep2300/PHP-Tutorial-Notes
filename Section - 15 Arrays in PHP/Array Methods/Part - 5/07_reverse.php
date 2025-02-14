<?php

//* 7) array_reverse() method : Used to reverse the array.
/* It takes 2 argument, second is optional.
1) 1st the array which you want to reverse.
2) 2nd we pass when we want that the indexes of arrays does not changed.
 */

$bioData = ["Kuldeep", 1, true, 1500.01];
echo "<pre>";
print_r($bioData);
echo "</pre>";

/* $reversedArray = array_reverse($bioData);
echo "<pre>";
print_r($reversedArray);
echo "</pre>";
 */

$reversedArray = array_reverse($bioData, true); // When we don't want the index will be changed
echo "<pre>";
print_r($reversedArray);
echo "</pre>";

