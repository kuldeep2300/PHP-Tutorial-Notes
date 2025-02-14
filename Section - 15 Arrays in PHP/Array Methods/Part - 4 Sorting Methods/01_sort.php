<?php

//* 1) sort() method : This method sort `indexed array` in ascending order, to prevent the change in original array you can duplicate the original array and sort this duplicate array.

$numbers = [1,10, 8, 3, 0, 11, 29];

echo "<pre>";
print_r($numbers);
echo "</pre>";

$copySort = $numbers;

echo "Sorted Array : <br>";
sort($copySort);
echo "<pre>";
print_r($copySort);
echo "</pre>";
