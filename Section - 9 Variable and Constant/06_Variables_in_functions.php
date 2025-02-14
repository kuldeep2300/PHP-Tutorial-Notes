<?php
//!Only thing to remember that function can't be duplicated.

//* 1) Define a function
function message() {
    echo "Welcome to my website";
    echo "<br>";
}

// Function calling / Invoking / Running 
// message();
// message();

// function add() {
//     $num1 = 5;
//     $num2 = 10;
//     $result = $num1 * $num2;
//     echo $result;
// }

// add();

//* 2) Can we have Duplicate Functions? - It will give erro in php function can't be duplicated.
// function add() {
//     $num1 = 5;
//     $num2 = 10;
//     $result = $num1 * $num2;
//     echo $result;
// }
// add();


//* 3) Can we call function before declaration? - Yes, we can.
// In PHP, you can call a function before its declaration because of a concept called "hoisting," where the function declaration is essentially moved to the top of the script during the parsing phase, allowing the function to be recognized even if it appears later in the code when you try to call it; this means the interpreter knows about the function's existence even before it encounters the actual function definition. 

add();
function add() {
    $num1 = 5;
    $num2 = 10;
    $result = $num1 * $num2;
    echo $result;
}

