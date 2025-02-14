<?php

//* In this we are going to learn some advanced fetching styles of PDO.

include 'includes/connect.php';
$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

//* 1) FETCH_COLUMN

/* $fetch_records = $con->prepare("Select * from employee_data");
$fetch_records->execute();
 */
// $row = $fetch_records->fetchAll(PDO::FETCH_COLUMN); // It is going to give me first column from the table (id) in this index number will be started from 0, we can also set it by providing 3rd arg with column number.
/* $row = $fetch_records->fetchAll(PDO::FETCH_COLUMN, 1); 
echo "<pre>";
print_r($row);
echo "</pre>"; */

//* 2) FETCH_GROUP - It is going to group the data.

// $fetch_records = $con->prepare("Select * from employee_data");
$fetch_records = $con->prepare("Select emp_place, emp_name from employee_data"); // Grouping the date based on place only showing emp_names.
$fetch_records->execute();

$row = $fetch_records->fetchAll(PDO::FETCH_GROUP); 
echo "<pre>";
print_r($row);
echo "</pre>";