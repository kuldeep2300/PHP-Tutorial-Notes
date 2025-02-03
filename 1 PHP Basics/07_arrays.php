<?php
$fruits = "apple<br>";
echo $fruits;

// Array
$terms = array("apple", "mango", 1, "SQL", "PHP");
// var_dump($terms); // find data type of variable
// echo $terms;     // this will give error - array to string conversation
echo implode("|", $terms);

// There are 3 types of array
/* 1) Indexed array 
   2) Associative array
   3) Multi-deminsional array
*/

//? Associative array
echo "<br><br>";
$fruits_data = array("fruits" => "apple", "quantity" => "5kg", "price" => 100);
var_dump($fruits_data);
echo "<br>";
echo $fruits_data["fruits"];
echo "<br>";
echo $fruits_data["quantity"];
echo "<br>";
echo $fruits_data["price"];
echo "<br>";

// Update data
echo "<br>";
echo $fruits_data["quantity"] = "10kg";


