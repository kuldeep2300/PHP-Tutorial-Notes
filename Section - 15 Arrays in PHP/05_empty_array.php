<?php

//* EMPTY ARRAY - In PHP, an empty array refers to an array that contains no elements. It is essentially an array with a length of zero.

// $bioData = array(); // Defining empty array using both ways

// $bioData = [];
// echo $bioData;   // We can't use even if array is empty

// print_r($bioData);
// var_dump($bioData);

//* Check array is empty or not using - empty() function
// $bioData = [];
// $bioData = [1,2];
// echo empty($bioData) ? "Array is empty" : "Array is not empty!!!";

//* Adding element inside the array
// $bioData = [];
// print_r($bioData);
// echo "<br>";
// var_dump($bioData);
// echo "<br>";

// $bioData = "Kuldeep"; // By doing this it will completely convert array into string.

// print_r($bioData);
// echo "<br>";
// var_dump($bioData);

// $bioData = ["Kuldeep"];
// print_r($bioData);
// echo "<br>";
// var_dump($bioData);
// echo "<br>";

// $bioData[] = 20;     // It will automatically assign it next index position : 1
// print_r($bioData);
// echo "<br>";
// var_dump($bioData);
// echo "<br>";

// $bioData[2] = ["Riya"]; // It will create an array at index : 2
// print_r($bioData);
// echo "<br>";
// var_dump($bioData);
// echo "<br>";

// $bioData[2][1] = "Shalini"; // To insert element inside index 2 array we can do this, we use 1th position because 0th position if for riya already.
// print_r($bioData);
// echo "<br>";
// var_dump($bioData);
// echo "<br>";

//* HOW TO RESET ARRAY 
// $bioData = [1, "Kuldeep Verma", 21, true, 15000];
// print_r($bioData);
// echo "<br>";
// $bioData = [];
// print_r($bioData);
// echo "<br>";

//* Array inside array
$bioData = [[]]; // In this outer array we have one inner array at 0th index, outer array length will be 1 and inner array will be 0.
print_r($bioData);
echo "<br>";
var_dump($bioData);