<?php

//* First read about pdf - 3 fetch different styles okay.
//* In this we are going to learn how to fetch some data from the database, so first I insert the data inside the database using phpmyadmin, then now here I am going to fetch these data using PDO concepts and show on the display the fetch result.


include 'includes/connect.php';

$fetch_records = $con->query("Select * from employee_data");

/* FETCH SINGLE RECORD 
$row = $fetch_records->fetch();

echo "<pre>";
print_r($row);
echo "</pre>";
 */

// MULTIPLE RECORD FETCHING USING - WHILE LOOP
/* while($row = $fetch_records->fetch()) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
} */


//* Different Style to fetch data 
//? 1) PDO::FETCH_ASSOC
/* 
while($row = $fetch_records->fetch(PDO::FETCH_ASSOC)) {
    echo $row['emp_id'] . " ";
    echo $row['emp_name'] . " ";
    echo $row['emp_place'] . " ";
    echo $row['emp_age'] . " ";
    echo $row['emp_dob'] . " ";
    echo "<br>";
} */

//? 2) PDO::FETCH_NUM
/* 
while($row = $fetch_records->fetch(PDO::FETCH_NUM)) {
    echo $row[0] . " ";
    echo $row[1] . " ";
    echo $row[2] . " ";
    echo $row[3] . " ";
    echo $row[4] . " ";
    echo "<br>";
} */

//? 3) PDO::FETCH_BOTH
/* 
while($row = $fetch_records->fetch(PDO::FETCH_BOTH)) { //? fetch() also work
     echo $row['emp_id'] . " ";
    echo $row['emp_name'] . " ";
    echo $row['emp_place'] . " ";
    echo $row['emp_age'] . " ";
    echo $row['emp_dob'] . " ";
    echo "<br>";
    echo $row[0] . " ";
    echo $row[1] . " ";
    echo $row[2] . " ";
    echo $row[3] . " ";
    echo $row[4] . " ";
    echo "<br>";
} */

//? 4) PDO::FETCH_OBJ
// Here we are having a class and we can't directly pass 'key name' or index value. Because this is not an array this is an object. To access object properties and behaviour/methods we have to use (->) array sign.

while($row = $fetch_records->fetch(PDO::FETCH_OBJ)) {
    echo $row->emp_id . " ";
    echo $row->emp_name . " ";
    echo $row->emp_place . " ";
    echo $row->emp_age . " ";
    echo $row->emp_dob . " ";
    echo "<br>";
}
