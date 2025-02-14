<?php
//*  Dynamic function calling or also called Variable function
/*Dynamic function calling in PHP allows you to call functions whose names are determined at runtime. This is useful when you have multiple functions that serve similar purposes, and you want to decide which one to call based on certain conditions or parameters.*/

/* //? Normal Function Calling
function myName($name) {
    echo $name;
} 

myName("Kuldeep"); */

//? Dynamic Function Calling
//* Example - 1

function myName($name) {
    echo $name;
}

$displayMessage = "myName"; // We assign same name like function name.
// echo $displayMessage;   // print only myName
// $displayMessage("Kuldeep"); // execute myName(arguments) function and print result


//* Example - 2
function greet() {
    echo "Good Morning";
}

function farewell() {
    echo "Good Bye";
}

$condition = false;
if($condition) {
    $functionName = 'greet';
} else {
    $functionName = 'farewell';
}

// $functionName();

//* Exercise - Write a function to add 2 numbers

function add($a, $b) {
    return $a+$b;
}

$twoNumSum = 'add';
$result = $twoNumSum(50, 20);
echo "Sum of 2 numbers : $result";

