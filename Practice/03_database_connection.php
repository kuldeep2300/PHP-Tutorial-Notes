<?php

$con = mysqli_connect("localhost", "root", "", "pdo_tutorial");
if ($con->connect_errno) die("Connection failed");

echo "Connection is established";

$data_query = "Select * from employee_data";

$result = mysqli_query($con, $data_query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}
