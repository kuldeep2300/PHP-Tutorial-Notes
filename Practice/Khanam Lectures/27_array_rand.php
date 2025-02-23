<?php

$fruits = ['mango', 'banana', 'apple', 'watermelon', 'papaya'];
echo "<pre>";
print_r($fruits);
echo "</pre>";

/* $randomKey = array_rand($fruits);
echo "<pre>";
print_r($fruits[$randomKey]);
echo "</pre>"; */

$randomKeyArray = array_rand($fruits, 3); // generate 3 random keys in the form of array

// print_r($randomKeyArray);

foreach($randomKeyArray as $value) {
    echo "<pre>";
    print_r($fruits[$value]);
    echo "</pre>";
}