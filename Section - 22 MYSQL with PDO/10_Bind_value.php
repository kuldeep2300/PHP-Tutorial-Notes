<?php

//* The main difference between bindValue and bindParam is simply is that, when we are using bindParam for binding the data then we can only pass the perameteres(variables) which contains value, but when we are using the `bindValue` then we can use both, we can pass parameters (variable) or can also pass value directly to binding the data, it will work properly.

include 'includes/connect.php';
$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

/* $place = "Kota";
$fetch_records = $con->prepare("Select * from employee_data where emp_place = ?");

// $fetch_records->bindParam(1, $place, PDO::PARAM_STR); // We can either pass variable
$fetch_records->bindValue(1, "Kota", PDO::PARAM_STR); // We can either pass directly value

$fetch_records->execute();

$row = $fetch_records->fetchAll();

echo "<pre>";
print_r($row);
echo "</pre>";
*/

//* There is also another way if you don't want to use both, bindValue, and bindParam
/* $place = "Kota";
$fetch_records = $con->prepare("Select * from employee_data where emp_place = ?");
$fetch_records->execute(array($place));

$row = $fetch_records->fetchAll();
echo "<pre>";
print_r($row);
echo "</pre>"; */

//* Another way 
$place = "Kota"; 
$name = "Antima Goacher";
$fetch_records = $con->prepare("Select * from employee_data where emp_place = ? and emp_name = ?"); //? It is must to give name in same order in the execute arg, like first emp_place, 2nd emp_name, if we change order then it will not show data.
$fetch_records->execute([$place, $name]);

$row = $fetch_records->fetchAll();
echo "<pre>";
print_r($row);
echo "</pre>";


