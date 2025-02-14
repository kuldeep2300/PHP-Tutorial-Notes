<?php

//* array_push() method : push method basically add elements to the end of the array.

$fruits = ["apple", "banana", "mango"];
echo "<pre>";
print_r($fruits);
echo "</pre>";

array_push($fruits, "grapes");
echo "<pre>";
print_r($fruits);
echo "</pre>";

//* Pushing multiples values at the end of the array
array_push($fruits, "kiwi", "watermelon", "papaya");
echo "<pre>";
print_r($fruits);
echo "</pre>";

//? array_push() method alternative is
$fruits[] = "Orange";
echo "<pre>";
print_r($fruits);
echo "</pre>";

