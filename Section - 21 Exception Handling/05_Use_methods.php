<?php

//* In this we will learn different methods of displaying error.

function division($number)
{
    try {
        if ($number <= 0) {
            throw new Exception("Number cannot be zero!!");
        }
        $result = 4 / $number;
        echo $result;
    } catch (Exception $e) {
        // echo $e->getMessage();   // Using this method to access the exception message
        // echo $e->getLine();     // Using this to access a line where exception is occur.
        // echo $e->getCode();     // Using this to access code value, default it is set at 0, but we can modfiy code set value by providing second argument in the `throw new Exception("Number cannt be zero", 32)` like this.
        // echo $e->getFile();        // Using this we can find in which file we have encounter exception.  

    }
}

division(0);
