<?php

// strpos() function - Used to find out the position of substring or character inside the string.
// Syntax : strpos($string, $searchData);

$stringData = "The strpos function in PHP is used to find the position of the first occurrence of a substring in a string.";

// $stringData = "Kuldeep position";

// $position = "position"; 
// $position = "POSITION"; // Case - sensitive , Output - Position not found, to make it case - insensitive use `stripos function which will make it case insensitive and search and give result`

$position = "The";  // Here the will return 0 (and there are many way which are not correct and not print that position is found.)


$result = strpos($stringData, $position);   // If we are searching a word which does not exist then it will returning me empty not display anything okay, then we can use ternary operator.
// $result = stripos($stringData, $position);  // Search Capital POSITION with case-insensitive

//? That's wrong way to print, it will print not found position for 0 index.
// echo $result ? "Position is Found at index : $result" : "Position not found!!";
// echo !$result ? "Position not found" : "Position found at index : $result";

// if(!0) {
//     echo "Position not found";
// }

//! Write way to print it based on boolean value, meaning 0 is not show in echo but it not false when we check with ===

// if ($result === false) {
//     echo "Position not found";
// } else {
//     echo "Position found at index : $result";
// }

echo ($result === false) ? "Position not found" : "Position found at index : $result";