<?php

//* In php it is possible to update the array, we can change entire array into any data type like string, int, float, and we can also update individual value inside the array.

$employeeData = [120, "Kuldeep", 21, true, 30000];
// echo "<pre>";
// print_r($employeeData);
// echo "</pre>";
// echo "<br>";

//* Change Complete array
// $employeeData = "Kelash";
// // print_r($employeeData);
// echo $employeeData;

//* Changing individual array
// $employeeData[1] = "Kushagra";
// echo "<pre>";
// print_r($employeeData);
// echo "</pre>";
// echo "<br>";

//* We can also change the data type of individual value
// var_dump($employeeData);
// $employeeData[4] = 30000.00;

// echo "<pre>";
// print_r($employeeData);
// echo "</pre>";

// echo "<br>";
// var_dump($employeeData);

//* Changing complete array
var_dump($employeeData);
echo "<br>";
$employeeData[0] = "Kuldeep";
$employeeData[1] = 109;
$employeeData[2] = false;
$employeeData[3] = 21;
$employeeData[4] = 45000.09;

echo "<pre>";
print_r($employeeData);
echo "</pre>";

echo "<br>";
var_dump($employeeData);