<?php

//* 2) rsort() method : This method sort `indexed array` in descending order, to prevent the change in original array you can duplicate the original array and sort this duplicate array.

$numbers = [4,1, 8, 5, 3];
echo "<pre>";
print_r($numbers);
echo "</pre>";

echo "Reverse Sort : <br>"; 
$copyReverseSort = $numbers;
rsort($copyReverseSort);
echo "<pre>";
print_r($copyReverseSort);
echo "</pre>";

