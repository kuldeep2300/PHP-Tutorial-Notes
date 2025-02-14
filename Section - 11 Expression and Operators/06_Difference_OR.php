<?php
// Logical operators: Difference between Logical OR - ||

// || - Higher Priority
// OR - Lower Priority

// echo true || false;  // 1
// echo false OR false; // nothing print

$result1 = false || true;
echo $result1 ? "true" : "false";

$result2 = false or true;
// echo $result2? "true" : "false";  // print false even it should be print true;
 
$result2 = "apple" or true;
// echo $result2;  // print the apple value direct because of less priority