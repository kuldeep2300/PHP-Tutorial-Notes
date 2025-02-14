<?php

include 'includes/connect.php';
$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$fetch_records = $con->query("Select * from employee_data");
$row = $fetch_records->fetchAll();

/* if (count($row)) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
} else {
    echo "No records found!!";
}*/

//* For displaying complete data - Using foreach loop
if (count($row)) {
    foreach ($row as $value) {
        echo "<pre>";
        print_r($value);
        echo "</pre>";
        echo "<br>";
        foreach ($value as $data) {
            print_r($data);
            echo "<br>";
        }
    }
} else {
    echo "No records found!!";
}
