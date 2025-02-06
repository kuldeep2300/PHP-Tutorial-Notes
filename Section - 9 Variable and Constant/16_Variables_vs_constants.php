<?php
// Variables vs constants
// Syntax: $variableName = value.
// Syntax: define(CONST_NAME, value); 

//* ➡️1. Can be modified and reassigned throughout the script.
// $myname="Khanam";
// $myname="Riya";
// echo $myname;

// Immutable, cannot be changed once defined.
define('LANGUAGE','PHP');
// define('LANGUAGE','JavaScript');
// echo LANGUAGE;


//* ➡️2. Local or global, depends on context.
// function variableFunction(){
//     $myname="Saniya";
//     echo $myname;
// }
// variableFunction();

//* ➡️3.  Dynamic Typing: Can change data type dynamically based on value.
$age= " eighteen " ;
// $age=18;
echo $age;
var_dump($age);

// Does not change data type.
define(PI, 3.14);
// define(PI, '3.14');
echo PI;
echo var_dump(PI);

//* ➡️4. Variable : Suitable for data that may change or be manipulated dynamically.

// Contants:  Suitable for fixed values, configuration settings, and constants in code.