<?php

//* In this we are going to learn how to fetch some data from the database, so first I insert the data inside the database using phpmyadmin, then now here I am going to fetch these data using PDO concepts and show on the display the fetch result.


include 'includes/connect.php';

$fetch_records = $con->query("Select * from employee_data");

/* // FETCH SINGLE RECORD 
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

