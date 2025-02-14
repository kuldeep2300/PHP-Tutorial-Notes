<?php
//* array_unique() method : This method will extract only unique values from the array and remove duplicates in the array, it return a new array which have unique values.

$fruits = ["apple", "banana", "cherry", "banana", "cherry", "date", "date", "banana", "cherry", "watermelon", "date", "elderberry"];

echo "<pre>";
print_r($fruits);
echo "</pre>";

$uniqueArray = array_unique($fruits);
echo "<pre>";
print_r($uniqueArray);
echo "</pre>";

//* To print it with serial wise meaning proper index value we can use array_values() method

$validValues = array_values($uniqueArray);
echo "<pre>";
print_r($validValues);
echo "</pre>";
