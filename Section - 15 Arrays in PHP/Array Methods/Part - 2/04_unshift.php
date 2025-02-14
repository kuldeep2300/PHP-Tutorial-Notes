<?php

//* array_unshift() method : Similar to push method but instead of inserting element at the end of the array, it will add element at the starting of the array.

$fruits = ["banana", "cherry"];
echo "<pre>";
print_r($fruits);
echo "</pre>";

array_unshift($fruits, "ORANGE");
echo "<pre>";
print_r($fruits);
echo "</pre>";

array_unshift($fruits, "GRAPES", "PAPAYA", "WATERMELON", "KIWI");
echo "<pre>";
print_r($fruits);
echo "</pre>";

