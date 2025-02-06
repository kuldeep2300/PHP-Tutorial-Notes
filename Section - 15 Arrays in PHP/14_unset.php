<?php

//* UNSET FUNCTION FOR -> INDEXED ARRAY 
$numbers = [1,2,3,4,5];
echo "<pre>";
print_r($numbers);
echo "</pre>";

//* Using unset we can remove entire element in the array and make it undefined, or we can also remove individual index completely by providing index number of array.
/*
unset($numbers[3]);
echo "<pre>";
print_r($numbers);
echo "</pre>";

$numbers[] = 7;
echo "<pre>";
print_r($numbers);
echo "</pre>";

*/

//* UNSET FUNCTION FOR -> ASSOCIATIVE ARRAY 
/* 
$person = [
    "name" => "Kuldeep",
    "age" => 21,
    "city" => "Kota"
];

echo "<pre>";
print_r($person);
echo "</pre>";

unset($person['age']);
echo "<pre>";
print_r($person);
echo "</pre>";

$person['role'] = "MERN Stack Developer";
echo "<pre>";
print_r($person);
echo "</pre>";

$person[] = 90;
echo "<pre>";
print_r($person);
echo "</pre>";

$person['age'] = 21;
echo "<pre>";
print_r($person);
echo "</pre>";

$person[] = 80;
echo "<pre>";
print_r($person);
echo "</pre>";

$person[] = 90;
echo "<pre>";
print_r($person);
echo "</pre>";

unset($person[0]);
echo "<pre>";
print_r($person);
echo "</pre>";

$person[] = 100;
echo "<pre>";
print_r($person);
echo "</pre>";

 */