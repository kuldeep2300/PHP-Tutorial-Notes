<?php

//* bindParam and bindValue are going to bind input values, but bindColumn going to bind output values from the database directly.

include 'includes/connect.php';
$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
/* 
$place = "Kota";
$fetch_records = $con->prepare("Select * from employee_data where emp_place = ?");
$fetch_records->bindParam(1, $place, PDO::PARAM_STR);
$fetch_records->execute();

$row = $fetch_records->fetchAll();
echo "<pre>";
print_r($row);
echo "</pre>"; */

//* When we are using bindColumn method then instead of passing `1` in bindParam 1st arg, we are passing column number present inside the table.

/* $fetch_records = $con->prepare("Select emp_name, emp_place, emp_age from employee_data");
$fetch_records->bindColumn('emp_name', $username);
$fetch_records->bindColumn('emp_place', $place);
$fetch_records->bindColumn('emp_age', $age);
$fetch_records->execute();

$row = $fetch_records->fetchAll();
echo "<pre>";
print_r($row);
echo "</pre>"; */

//* How to access particular data
// echo $row[0]['emp_name']; // But we have bind Data with $username, $place, and $age variable so instead of this we can do this.

// echo $username; // It will return only last index array name data.

//* So to access every data we have to use while loop - and only fetch data at one time. So remember whenever you are using bindColumn then use fetch() method only instead of fetchAll(), so that we can fetch every single data instead of only last data using fetchAll().

/* while($row = $fetch_records->fetch()) {
    echo $username . "<br>";
} */

//* EXAMPLE - 2) WE CAN ALSO GIVE NUMBER IN PROPER INCREASING ORDER

/* $fetch_records = $con->prepare("Select emp_name, emp_place, emp_age from employee_data");
$fetch_records->bindColumn(1, $username);
$fetch_records->bindColumn(2, $place);
$fetch_records->bindColumn(3, $age);
$fetch_records->execute();

while($row = $fetch_records->fetch()) {
    echo $username . "<br>";
    echo $place . "<br>";
    echo $age . "<br>";
    echo "<br><br>";
} */