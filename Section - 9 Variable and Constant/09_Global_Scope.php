<!-- //* Global Scope : 
A global variable is defined outside any function and is accessible throughout the script, scope known as Global Scope.

Syntax : global $variablename;

//! NOTE - We can't simply define and assigning global variable value directly.
global $language = "PHP"; ❌ (This is wrong)
-->
 
<?php

//* 1) Define a global variable? 

// global $language;
// $language = "PHP";

//* 2) Global vs Local Variable

// function display_message() {
//?  Even after defining global variable we can't access it inside the function, coz function have their own local scope, and  local scope variable end after function execution.
//     $language = "Backend";
//     echo $language;
//     echo "<br>";
// }

// display_message();
// echo $language;


//* 3) How to access Global variable inside the function? 

// global $language; // We see how to access global variable.

$language = "PHP ";  // We can also use local scope language variable inside the function, by simply writing global in front of variable meaning we make local scope to global, and it will work properly.
echo $language; // But before function its value remain PHP

function display_language() {
    // We only have to define glboal variable one time inside the function again.
    global $language;
    // we can also change its value inside function and it will also be reflected outside the function.
    $language = "Backend ";
    echo $language;
}

display_language();
echo $language;