<?php
declare(strict_types = 1);
//? Notes are in Pdf read first

/* 
function sum($a, $b) {
    echo "Sum of 2 numbers : ". $a + $b . "<br>";
}

sum('10', '4');  */  // Here `type coercion` happen & that's why string value also give us addition result.

//* Prevent type coercion using `declare(strict_types = 1)` 
/* 
function sum(int $a, int $b) : int {
    return $a + $b;
}

// sum('10', '3'); Give us error
// $result = sum(10, 20);
// echo "Sum of 10 & 20 will be : $result";

$result =  sum(100, 20);
echo "Sum of 100 & 20 will be : $result"; */

function sum(string $a, string $b) : string {
    return $a.$b;
}

$result = sum("Kuldeep ", "Verma");
echo $result;

