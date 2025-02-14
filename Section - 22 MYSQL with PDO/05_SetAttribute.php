<?php

//* In this we learn how to set attribute properties, like for fetch method it will displaying data in both based on key and index value, so deafult fetch_both is selected we can change default style to other fetch style also using this setAttribute().

include 'includes/connect.php';
$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
// $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
// $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$fetch_data = $con->query("Select * from employee_data");
while($row = $fetch_data->fetch()) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}