<?php

//? Print odd numbers between starting number and ending number, if number same value, zero, less than zero, and 1st element is greater than second then throw an exception (Please enter valid numbers).

function printOddNumber($num1, $num2) {
    if($num1 <= 0 || $num2 <= 0 || $num1 == $num2) {
        throw new Exception("Please enter valid number!");
    } elseif($num1 > $num2) {
        throw new Exception("Please enter valid range!");
    }

    for($i = $num1; $i <= $num2; $i++) {
        if($i % 2 !== 0) {
            echo "Odd number : $i <br>";
        }
    }
}

function handle_exception($exception) {
    echo $exception->getMessage();
}

set_exception_handler('handle_exception');
printOddNumber(20, 5);
/* 
try {
    printOddNumber(10, 0);
}catch(Exception $e) {
    handle_exception($e);
} */