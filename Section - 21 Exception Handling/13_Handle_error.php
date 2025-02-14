<?php

//? In this lecture we are going to learn how to handle errors. In previous file 12_Catch_error.php we learn the difference between error & exception, we can't throw & catch an error, in this lecture we will learn how to handle error properly. We can handle error using `set_error_handler()` method. Like for exception we have set_exception_handler() similarly for error we have set_error_handler() method.

// set_error_handler() method : The user function needs to accept two parameters: the error code, and a string describing the error. Then there are three optional parameters that may be supplied: the filename in which the error occurred, the line number in which the error occurred, and the context in which the error occurred (an array that points to the active symbol table at the point the error occurred). 

// NOTE : THIS METHOD/FUNCTION IS NOT GOING TO HANDLE ALL TYPES OF ERRORS {FETAL ERROR, ERROR, DIVISIONBYZER ERROR}, IT CAN HANDLE ONLY A SPECIFIC ERRORS. IT CAN HANDLE {WARNING, NOTICES}.

//* EXAMPLE - 1
/* 
function custom_warning_handle() {
    echo "Warning";
}

set_error_handler('custom_warning_handle'); */

// If we only write above code then it will not work properly, because it not generating errors, that's why we have to generate errors. Then instead of showing error undefined variable, then it will show us the statement which we have written inside the funciton "warning" only instead of error.

// echo $undefined_variable;

//* EXAMPLE - 2 -> We can't use this concept for fetal or DivisionByZero error.

function custom_warning_handle($errno, $errstr, $errfile, $errline) {
    echo "Warning - $errstr - $errfile - $errline";
}

set_error_handler('custom_warning_handle');

// echo $undefined_variable;
echo 4/0;