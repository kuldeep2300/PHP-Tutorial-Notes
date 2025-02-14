<?php

//* shuffle() method : Using this we can shuffle array elements in  a random order automatically generated, remember this functionn is going to change our original array okay.

$fruits = ["apple","data", "cherry", "watermelon", "pineapple"];
echo "<pre>";
print_r($fruits);
echo "</pre>";

// shuffle($fruits);
// echo "<pre>";
// print_r($fruits);
// echo "</pre>";

//* If we don't want to modify original data then we can make its new copy and shuffle them, it will prevent the changes in original data

$newData = $fruits;

shuffle($newData);
echo "<pre>";
print_r($newData);
echo "</pre>";