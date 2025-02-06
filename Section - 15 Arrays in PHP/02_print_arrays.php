<?php

// $details = [1, "Kuldeep", true, [1,2,3], 15000.00];
// echo $details; // Not possible
// print_r($details);     // To print proper readable format use pre tag

// echo "<pre>";
// print_r($details);
// echo "</pre>";

// echo "<br>";
// var_dump($details);

//? Access individually 
// echo $details[0]."<br>";
// echo $details[1]."<br>";
// echo $details[2]."<br>";
// echo $details[3]."<br>"; // Give error array to string conversation use print_r
// echo $details[4]."<br>";

//? Inside single or double quotes
// print_r("$details"); // Not - possible

// echo "$details[0]";  // Possible only for double quotes, in single it will we treated as text.

//? Indentation : Using indentation array will not be affected.

$details = [1, 
"Kuldeep", 
true, 
[1,2,3],
15000.00
];

echo "<pre>";
print_r($details);
echo "</pre>";

echo "<br>"; 
var_dump($details);  // Var dump will also not be affected.

