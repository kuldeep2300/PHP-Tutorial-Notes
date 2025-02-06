<?php

//* Mixed array - are the array which contain different type of values.
// $bioData = ["Kuldeep", 21, true, 350.01];
$bioData = [];
// print_r($bioData);
// echo "<br>";
// $bioData[0] = "Kuldeep";
// $bioData[1] = 21;
// $bioData[2] = true;
// $bioData[3] = 350.01;
// print_r($bioData);

$bioData[0] = "Kuldeep";
$bioData[4] = 21;
$bioData[6] = true;
$bioData[9] = 350.01;
print_r($bioData);

echo (empty($bioData[1]) ? "True" : False);
$bioData[] = "Seema";
print_r($bioData);