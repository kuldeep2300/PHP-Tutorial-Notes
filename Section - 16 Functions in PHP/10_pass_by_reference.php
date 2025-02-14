<?php
/* 
function greet($msg) {
    $msg = "Good morning";
    echo $msg . "<br>";
}

$msg = "Hey";
greet($msg); // Passing by value
echo $msg;
 */

/* //? Example - 1
function greet(&$msg) {  // It is telling that we are not storing value, we are storing the reference of the variable
    $msg = "Good Morning";    
    echo $msg . "<br>";
}

$msg = "Hey";
greet($msg);
echo $msg;
 */

/* //? Example - 2
function increment($num) {
    $num++; 
    echo "Inside function value : $num <br>";
}

$value = 10;
echo "Before Function Call value : $value <br>";
increment($value);
echo "After Function Call value : $value <br>";
 */

function increment(&$num)
{
    $num++;
    echo "Inside function value : $num <br>";
}

$value = 10;
echo "Before Function Call value : $value <br>";
increment($value);
echo "After Function Call value : $value <br>";
