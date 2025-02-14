<?php

//* In this we learn how to insert data inside the database using colon placeholder.

include 'includes/connect.php';
$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$empName = "Suresh";
$empPlace = "New York";
$age = 32;
$dob = 1990;

$insert_query = $con->prepare("Insert into employee_data (emp_name, emp_place, emp_age, emp_dob) values (:emp_name, :emp_place, :emp_age, :emp_dob)");
$insert_query->execute([':emp_name' => $empName, ':emp_place' => $empPlace, ':emp_age' => $age , ':emp_dob' => $dob]);

