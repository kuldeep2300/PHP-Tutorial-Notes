<?php
//*  Anonymous Function
/*
The function which does not have a function name, they don't have any name to it.
This is basically defining the function without a function name and assigning to a variable. So variable actually holds a function. 
*/

/* //? Normal Function
function friend() {
    echo "My Friend is Rem";
}

friend(); */

//? Anonymous Function
$displayFriend = function() { // Here we are assigning a function to variable that's why we have end variable with semicolon.
    echo "My Friend is Rem.";
};

// $displayFriend();

//? Another Example or use case 
$myList = "List is completed";
/* 
function data() {
    echo $myList;   // error coz it have local scope.
}

data(); */

//? Using anonymous function we can use variable outside the function scope.
$accessData = function() use ($myList) {
    echo $myList;
};

$accessData();