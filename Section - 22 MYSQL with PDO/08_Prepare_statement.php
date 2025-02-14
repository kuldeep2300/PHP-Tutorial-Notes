<?php

//* Instead of $con->query(), it is always recommended to use $con->prepare() statement because it is secure. A prepared statement is a feature in PDO that separates SQL logic from data, making queries more secure and preventing SQL Injection.


include 'includes/connect.php';
$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

//? Assume for now user input will be this
// 1st step prepare statement
$place = "Kota";
$name = "Nivedita Verma";
$fetch_records = $con->prepare("Select * from employee_data where emp_place = ? and emp_name = ?");

// 2nd step we bind this data to variable
$fetch_records->bindParam(1, $place);
$fetch_records->bindParam(2, $name);
$fetch_records->execute();

$row = $fetch_records->fetchAll();
echo "<pre>";
print_r($row);
echo "</pre>";