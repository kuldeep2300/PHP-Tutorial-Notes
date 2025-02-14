<?php

$db_name = "mysql:host=localhost;dbname=pdo_tutorial";
$username = "root";
$password = "";

$con = new PDO($db_name, $username, $password);
if(!$con) {
    echo "Connection is not established!";  
} 