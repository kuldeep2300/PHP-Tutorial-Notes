<!-- //* Scope in PHP:
 
There are 3 types of scope in PHP.

//* 1) Local Scope : 
A local variable is declared within a function or block of code and is only accessible within that scope, known as local scope.

Local Variable: Variable defined inside function will die after the function has been completed means after the function has been executed , variables cannot be accessed outside.
-->

<?php

//*  1) Local Variable - Function variable is only local to its function, it has no existence outside the function. After function complete function variable scope is also end, we can't access it again.

// $language = "PHP";

// function display_language() {
//     $language = "Backend";
//     echo $language;
//     echo "<br>";
// }

// display_language();
// echo $language;

//* 2) What is variable scoping ? - Function Outside variable can't be access inside the function, variable inside function have only function or block or local scope, here we only declare and after that we printing this that's why it's showing us error.

$language = "PHP";

function display_language() {
    // echo $language;
}

display_language();
echo $language;



