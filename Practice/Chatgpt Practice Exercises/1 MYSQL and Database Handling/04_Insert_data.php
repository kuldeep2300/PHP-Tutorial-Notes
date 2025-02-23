<?php

//* 4. Write a query to insert data into a table in MySQL using PHP.

include 'includes/mysqli_connection.php';

$name = "Shrivali";
$place = "Chennai";
$age = 21;
$dob = "10/12/2003";

$query = "insert into employee_data (emp_name, emp_place, emp_age, emp_dob) values (?, ?, ?, ?)";

$stmt = $mysqli->prepare($query);
$stmt->bind_param("ssis", $name, $place, $age, $dob);
$stmt->execute();

echo "Data inserted successfully!!";
