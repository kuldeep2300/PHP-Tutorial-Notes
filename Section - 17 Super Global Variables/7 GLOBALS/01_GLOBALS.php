<?php

//* We can't access variable which is outside the function.
/* 
$myName = "Kuldeep";
echo "$myName <br>";

function displayName() {
    echo $myName;
}

displayName(); */

//* We can access variable which is outside the function or making variable to global variable.
/* 
global $myName;
$myName = "Kuldeep";
echo "$myName <br>";

function displayName() {
    global $myName;
    echo $myName;
}

displayName(); */


//* Instead of defining global variable we can simple use $GLOBALS super global variable to use any variable directly.
/* 
$myName = "Kuldeep Verma";

function displayName() {
    echo $GLOBALS['myName']; //? We don't have to pass `$` sign in argument.
}

displayName(); */

//* We can create or make and access anywhere a variable which is made by $GLOBAL super global variable.

function displayName() {
    $GLOBALS['data'] = 900;
}

displayName();
echo $GLOBALS['data'] . "<br>";
echo $data;