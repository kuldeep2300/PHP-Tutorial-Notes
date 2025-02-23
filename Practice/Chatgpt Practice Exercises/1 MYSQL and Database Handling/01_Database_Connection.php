<?php

//* Ques - 1) How do you connect PHP to a MySQL database using MySQLi (Procedural way) then MySQLi (Object Oriented way) and PDO?

//? 1) MySQLi (Procedural Way)

/* 
$con = mysqli_connect('localhost', 'root', '', 'pdo_tutorial');

if($con->connect_error) {
    die("Connection failed : " . $con->connect_error);
} else {
    echo "Connection established successfully!";
} */

//? 2) MySQLi (Object - oriented way)
/* 
$con = new mysqli('localhost', 'root', '', 'pdo_tutorial');

if($con->connect_error) {
    die("Connection failed : " . $con->connect_error);
} else {
    echo "Database connection established successfully!!";
} */

//? 3) PDO (PHP Data Object)

$db_name = "mysql:host=localhost;dbname=pdo_tutorial";
$username = 'root';
$password = '';

// $con = new PDO($db_name, $username, $password);

// Instead of this there is a write way to handle error in PDO
/* if(!$con) {
    die("Connection failed : " . mysqli_connect_error());
} else {
    echo "Database connection established successfully!!!!";
} */

//? Using Exception handling
/*//? Key points about this line:
PDO::ATTR_ERRMODE:
    This is a constant that specifies the attribute you are setting, which controls how PDO handles errors. 
PDO::ERRMODE_EXCEPTION:
    This is a constant indicating that you want PDO to throw an exception when an error occurs.  */

try {
    $con = new PDO($db_name, $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // This line of code in PHP sets the PDO (PHP Data Objects) error mode to "exception", meaning that whenever a database error occurs, PDO will throw a PDOException instead of just setting an error code, effectively forcing you to handle errors explicitly in your code by catching the exception.
    echo "Database connection established successfully!!";
} catch (PDOException $e) {
    echo "Connection failed : " . $e->getMessage();
}
