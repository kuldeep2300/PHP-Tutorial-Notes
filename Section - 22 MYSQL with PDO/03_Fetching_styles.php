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
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}*/

//? 2) PDO::FETCH_NUM
/* 
while($row = $fetch_records->fetch(PDO::FETCH_NUM)) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
} */

//? 3) PDO::FETCH_BOTH
/* 
while($row = $fetch_records->fetch(PDO::FETCH_BOTH)) { //? fetch() also work
    echo "<pre>";
    print_r($row);
    echo "</pre>";
} */

//? 4) PDO::FETCH_OBJ

while($row = $fetch_records->fetch(PDO::FETCH_OBJ)) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}
