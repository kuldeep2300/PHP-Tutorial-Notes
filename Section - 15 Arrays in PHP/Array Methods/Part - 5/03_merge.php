<?php

//* 3) array_merge() method : Using this method we can merger two or more arrays together.

$data1 = ["Kuldeep", "Shamiksha", "Priyanshi"];
$data2 = ["Akanshu", "Samantha", "Emily"];
$data3 = ["Shrivali", "Rem", "Ram"];

echo "<pre>";
print_r($data1);
echo "</pre>";
echo "<pre>";
print_r($data2);
echo "</pre>";

//* 1) Merging for Indexed Array
/*//? $mergedData = array_merge($data1, $data2);
echo "<pre>";
print_r($mergedData);
echo "</pre>";
 */

/* $mergedData = array_merge($data3, $data2, $data1);
echo "<pre>";
print_r($mergedData);
echo "</pre>";
 */

//* 2) Merging for Associative Array - When both have same Keys
/* $fruit1 = [
    "a" => "apple",
    "b" => "banana"
];
$fruit2 = [
    "b" => "blueberry",
    "c" => "cherry"
];

echo "<pre>";
print_r($fruit1);
echo "</pre>";
echo "<pre>";
print_r($fruit2);
echo "</pre>";
 */

/* $mergedData = array_merge($fruit1, $fruit2); //? In associative array if both array have same key then the second arguement key value will be printed and first arguement key value will be discarded.
echo "<pre>";
print_r($mergedData);
echo "</pre>";
 */

/* $mergedData = array_merge($fruit2, $fruit1); //? In associative array if both array have same key then the second arguement key value will be printed and first arguement key value will be discarded.
echo "<pre>";
print_r($mergedData);
echo "</pre>";
 */

//* 3) Merging for Associative Array - When both have same Different Keys

$fruit1 = [
    "a" => "apple",
    "b" => "banana"
];
$fruit2 = [
    "c" => "cherry",
    "d" => "date",
    "e" => "elderberry",
    "f" => "fish"

];

echo "<pre>";
print_r($fruit1);
echo "</pre>";
echo "<pre>";
print_r($fruit2);
echo "</pre>";

$mergedData = array_merge($fruit1,$fruit2);
echo "<pre>";
print_r($mergedData);
echo "</pre>";

