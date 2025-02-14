<?php

//* 5) ksort() method : Using ksort() method we can sort `Associative Array` in ascending order work for both integer values and string as well, `the sorting process only based on keys`, not depend on the on the values.

$fruits = [
    "banana" => "banana",
    "apple" => "apple", 
    "elderberry" => "elderberry", 
    "cherry" => "cherry", 
    "date" => "date", 
    "kiwi" => "kiwi"
];

echo "<pre>";
print_r($fruits);
echo "</pre>";

$copyAssociative = $fruits;

ksort($copyAssociative);
echo "Associative array in ascending order : Based on keys <br>";
echo "<pre>";
print_r($copyAssociative);
echo "</pre>";

