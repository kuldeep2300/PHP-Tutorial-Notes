<?php

//* When searching for particular data we are also going to check the data type of the user input, by passing the 3rd args in the bindParam() method/function, which will check the data type for us.

include 'includes/connect.php';
$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// $place = "Bangalore";
$place = "Kota";
$id = "2";
// $fetch_records = $con->prepare("Select * from employee_data where emp_place = ? and emp_id = ?");  // Using and operator
$fetch_records = $con->prepare("Select * from employee_data where emp_place = ? or emp_id >= ?");   // Using or operator with conditions

$fetch_records->bindParam(1, $place, PDO::PARAM_STR); // This method for string checking, it will be check and then only give particular string data. // $fetch_records->bindParam(1, $place, PDO::PARAM_INT); // This method for int checking, if we use here string then it will not recognize search data & return all data.
$fetch_records->bindParam(2, $id, PDO::PARAM_INT);

$fetch_records->execute();

$row = $fetch_records->fetchAll();

echo "<pre>";
print_r($row);
echo "</pre>";
