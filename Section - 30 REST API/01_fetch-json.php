<?php

//* In this we are going to see what is use of json_encode() function, which is used for converting array data into object form, which are acceptable for many programming languages.

$con = mysqli_connect('localhost', 'root', '', 'test') or die("Database connection failed!!");
$sql_query = "select * from students where id = {$_POST['id']}";
$result = mysqli_query($con, $sql_query) or die("Query execution failed!!");

$fetchData = mysqli_fetch_all($result, MYSQLI_ASSOC);

/* echo "<pre>";
print_r($fetchData);
echo "</pre>"; */

//* Converting data into json object
echo json_encode($fetchData);