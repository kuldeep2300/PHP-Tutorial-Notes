<?php

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];

echo "$first_name and $last_name";

$con = mysqli_connect('localhost', 'root', '', 'test') or die('Connection Failed!');

$sql = "insert into students(first_name, last_name) values ('$first_name', '$last_name')";
// $result = mysqli_query($con, $sql) or die("SQL Query Failed");

if (mysqli_query($con, $sql)) {
    return true;
} else {
   return false;
}

?>