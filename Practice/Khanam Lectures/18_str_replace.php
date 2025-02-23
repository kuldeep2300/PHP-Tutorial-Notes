<?php

$string = "Hello I am Kuldeep Verma";
echo str_replace("Verma", "Verma, I am 21 years old now.", $string);

//* ucfirst() - convert first letter into uppercase
$string2 = 'kuldeep';

/* echo "<br>";
echo ucfirst($string2); */

//* strtolower() - convert string into lower case
$string3 = "KULDEEP"; 

echo "<br><br><br>";
echo ucfirst(strtolower($string3));