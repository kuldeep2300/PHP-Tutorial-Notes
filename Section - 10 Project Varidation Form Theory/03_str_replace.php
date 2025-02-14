<?php

$string = "Hello World";
// Syntax of replace string : str_replace(search, replace, subject, count); // Count is optional how many time replace

// echo str_replace("World", "PHP", $string);
 
// For array

$data = "Apple, Mango, Strawberry";
$fruit = array("mango", "apple", "Strawberry");
$colors = array("red", "yellow", "pink");

echo str_replace($fruit, $colors, $data);
?>