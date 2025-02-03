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

add();
function add() {
    $num1 = 5;
    $num2 = 10;
    $result = $num1 * $num2;
    echo $result;
}

