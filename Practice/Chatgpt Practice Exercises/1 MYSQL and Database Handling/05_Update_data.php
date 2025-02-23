<?php

//* 5. Write a query to update a record in a MySQL table using PHP.

include 'includes/mysqli_connection.php';

$newName = "Vishesh Kumar";
$id = 6;

$query = "update employee_data set emp_name = ? where emp_id = ?";

$stmt = $mysqli->prepare($query);
$stmt->bind_param("si", $newName, $id);
$stmt->execute();

echo "Data updated successfully!!";