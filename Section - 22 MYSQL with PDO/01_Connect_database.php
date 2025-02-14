<?php

//* Before read pdf - 0, 1, and 2 then read this code, in this code we are going to learn how to connect to MYSQL database using PDO.

// 1) Database 
$db_name = "mysql:host=localhost;dbname=pdo_tutorial";
$username = "root";
$password = '';

// 2) Connection - PDO take 4 arg, but here we are only giving 3, 4th is optional.

// $con = new PDO("mysql:host=localhost;dbname=pdo_tutorial", "root", ""); // We can also pass values directly but for better readability we should first assign value to the variables and use them as values.
$con = new PDO($db_name, $username, $password);

/* if($con) {      // If connection is established then we can select data, and also perform all the operation (CRUD). 
    echo "Connection is Successful";
} else {
    echo "Connection is not Successful";
} */

if(!$con) {
    echo "Connection is not Successful";
} 