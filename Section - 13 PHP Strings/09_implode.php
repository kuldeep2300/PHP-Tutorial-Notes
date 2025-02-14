<?php
//? Implode function - Opposite of explode convert array into string.
// impload(string $separater, array $arr) : string 

// SA = E (STRING TO ARRAY => WE HAVE EXPLODE)
// AS = I (ARRAY TO STRING => WE HAVE IMPLODE)

$vegetables = ["brinjal", "cucumber", "bottleneck"]; 
// print_r($vegetables);   // to print array use print_r() function.
// $result = implode(',', $vegetables);
// $result = implode(' ', $vegetables);    // when we only want one space between them
$result = implode(' | ', $vegetables);    // when we want to separate by |

echo $result . "<br>";
var_dump($result);
