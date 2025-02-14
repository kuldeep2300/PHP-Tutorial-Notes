<?php

//? Write a Recursive function to calculate the factorial of a given number.
function factorial($n) {
    if($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}
$value = 6;
$result = factorial($value);
echo "Factorial of $value : $result";