<?php

/*//* Error: An Error is an unexpected program result, which can not be handled by the program itself. That can be solved by using the issue in the code manually. An Error can be an infinite loop that can not be handled by the program itself so you have to manually repair that issue. There is an easy procedure to handle error i.e. using die() function.
Syntax: die("message") */

/*//* Exception: An Exception also is an unexpected result of a program but Exception can be handled by the program itself by throwing another exception. Exceptions should only be used with error conditions, where the error is non removal. There is an easy way to overcome the Exception by using try and catch method. 
Syntax : 
    try {
    }
    catch {
    }
*/

//? We can't throw or catch "Erro" DivisionByZero, it is error not an exception.
/* 
try{
    echo 7/0;
    throw new DivisionByZeroError("Hello"); // This error don't be throw like this. Meaning here division by 0 is an error not an exception that's why we can' change the its message, it will remain same like, we can only throw an exception and its message.
}catch(DivisionByZeroError $e){
    echo "Caught error : " . $e->getMessage();
} */

try {
    echo 7/0;
    throw new Exception("Hello");
}catch(Exception $e) {
    echo $e->getMessage();
}
