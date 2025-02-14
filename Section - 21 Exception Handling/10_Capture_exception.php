<?php

//* In this we will creating a function and inside this function we are going to throw an exception, and let us see how to catch this exception without using try, catch, and finally blocks, by creating our own custom exception handler.

function my_custom_exception($exception) {
    echo "Uncaught error : " . $exception->getMessage();
}

set_exception_handler('my_custom_exception');
// throw new Exception("Exception from our end.");

function divide($num1, $num2) {
    if($num2 <= 0) {
        throw new Exception("Enter a valid number !!");
    }
    $result = $num1 / $num2;
    return $result;
}
/* 
$answer = divide(30, 2);
echo $answer; */

$answer = divide(30, 0);
echo $answer;

