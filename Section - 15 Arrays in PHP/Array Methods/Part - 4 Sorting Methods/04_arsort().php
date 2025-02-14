<?php

//* 4) arsort() method : Using arsort() method we can sort `Associative Array` in descending order work for both integer values and string as well, the sorting process only based on values, not depend on the keys.

/* $fruits = [
    "apple" => 7, 
    "banana" => 5, 
    "cherry" => 9, 
    "date" => 2, 
    "elderberry" => 1
];
 */

$fruits = [
    "apple" => "apple",
    "cherry" => "cherry",
    "elderberry" => "elderberry",
    "date" => "date",
    "banana" => "banana"
]; 

/* $fruits = [
    1 => "apple",
    2 => "cherry",
    3 => "elderberry",
    4 => "date",
    5 => "banana"
]; 

 */
echo "<pre>";
print_r($fruits);
echo "</pre>";

$copyAssociative = $fruits;

arsort($copyAssociative);
echo "<pre>";
print_r($copyAssociative);
echo "</pre>";

