<?php

//* In this instead of "?" question placeholder we are going to using colon placeholder.
include 'includes/connect.php';
$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
/* 
$place = "Bangalore";
$fetch_records = $con->prepare("Select * from employee_data where emp_place = ?");
$fetch_records->bindValue(1, $place);
$fetch_records->execute();

$row = $fetch_records->fetchAll();
echo "<pre>";
print_r($row);
echo "</pre>"; */

//* Here during binding Value we can only give number value, not string, but using colon placeholder we can give string name also, and here position doesn't matter we can switch any position of bindValue function it will work properly. 
// While use bindValue we have to give integer value based on precedence 1, 2,3 & if we switch position above and below of bindValue method then it will change the output.
/* 
$place = "Bangalore";
$name = "Kuldeep Verma";
$fetch_records = $con->prepare("Select * from employee_data where emp_place = :place and emp_name = :name");
$fetch_records->bindValue(':place', $place); //? Here we can also use bindParam
$fetch_records->bindValue(':name', $name);
$fetch_records->execute();

$row = $fetch_records->fetchAll();
echo "<pre>";
print_r($row);
echo "</pre>"; */

//* IF YOU DON'T WANT TO USE BINDVALUE, ONLY WANT TO USE EXECUTE THEN

$place = "Kota";
$name = "Kuldeep Verma";
$fetch_records = $con->prepare("Select * from employee_data where emp_place = :place or emp_name = :name");
$fetch_records->execute([':place' => $place, ':name' => $name]);

$row = $fetch_records->fetchAll();
echo "<pre>";
print_r($row);
echo "</pre>";