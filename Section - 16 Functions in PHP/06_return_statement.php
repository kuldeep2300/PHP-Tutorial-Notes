<?php
/* 
? First Go and read 6 number pdf notes then solve this.
function sum($a, $b) {
    // echo $a + $b; // Only print
    return $a + $b; // We can use this for further purposes
}

$result = sum(10, 20);
echo $result;

 */

/*
function sum($a, $b) {
    $count = $a + $b;
    echo "Hello";
    return $count; // Code below the return statement will not be executed.
    return $a+$b. " Kuldeep";
}

$result = sum(10, 20);
echo $result;

*/

function sum(int $a, int $b) : string {
    $count = $a + $b;
    echo "Hello <br>";
    return $a+$b . " Kuldeep <br>"; // Here return type should be int but here it is string so will change data type into string.
    return $count;
}

$result = sum(10, 20);
echo $result;

