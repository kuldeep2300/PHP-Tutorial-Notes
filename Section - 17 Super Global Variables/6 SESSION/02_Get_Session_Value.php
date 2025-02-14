<?php

//! Example - 1
//* In this we learn how to get session value in the another file.

//* Step - 1) Start the session
/* session_start();

//* Step - 2) Get the session
echo $_SESSION['food']; */

//! Example - 2
/* 
session_start();

echo "Welcome " . $_SESSION['username'];
echo "<br>";
echo "Your email id is : " . $_SESSION['email'];
echo "<br>"; */

//! Example - 3) Here we make page like that if session is destroy then instead of showing the error it will print the message to login again.

session_start(); // First we have to start the session, remember it should be outside if-else, it should be in the global scope.

if (isset($_SESSION['username'])) {
    echo "Welcome " . $_SESSION['username'];
    echo "<br>";
    echo "Your email id is : " . $_SESSION['email'];
    echo "<br>";
} else {
    echo "Please Login Again!!";
}
