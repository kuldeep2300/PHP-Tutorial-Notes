<?php
//? Before starting code go and 9 and 10 pdf lectures then after this read code.

// We have to follow these 3 step 

//! Example - 1
//* 1) Start the session
/* 
session_start();

//* 2) Set the value (burger) to session (food).
// $_SESSION['food'] = "burger";
$_SESSION['food'] = "pizza"; // We can also change the session value easily

echo "Session is set";
// echo $_SESSION; // not print because it is an array

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

//* 3) Get the value of the session
echo $_SESSION['food']; */

//! Example - 2
session_start();

$_SESSION['username'] = "Kuldeep";
$_SESSION['email'] = "kuldeep@gmail.com";

echo "Session is set";

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

