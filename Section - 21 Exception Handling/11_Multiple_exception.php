<?php

//* In this we will going to learn how to handle multiple exceptions using set_exception_handler() method. Here when inside if statement when exception is thorw then it will be directly catch by catch block, then catch block throw an exception & it directly catch by `my_custom_exception` there it will print the catch block message.

function my_custom_exception($exception) {
    echo "Uncaught error : " . $exception->getMessage();
}

set_exception_handler('my_custom_exception');

function divide($num1, $num2) {
    try {
        if($num2 <= 0) {
            throw new Exception("Enter a valid number!!");
        } 
        $result = $num1 / $num2;
    } catch(Exception $e) {
        throw new Exception("Number cannot be divided by zero : ".$e->getMessage());
    }
    return $result;
}

$answer = divide(30, 0);
echo $answer;