<?php

//* 3. How do you use prepared statements to prevent SQL injection in PHP?
//Prepared statements are used to separate SQL code from data, which prevents SQL injection.
// MySQLi Example:

//* Using PDO
/* $db_name = "mysql:host=localhost;dbname=pdo_tutorial";
$username = 'root';
$password = '';

try {
    $con = new PDO($db_name, $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Connection failed : " . $e->getMessage());
}

// Prepared statement
$username = "Kuldeep Verma"; // User input

$fetch_records = $con->prepare("Select * from employee_data where emp_name = :username");
$fetch_records->bindParam(':username', $username);
$fetch_records->execute();

$row = $fetch_records->fetch();
echo "<pre>";
print_r($row);
echo "</pre>";
 */

//* Using MySQLi

$con = mysqli_connect('localhost', 'root', '', 'pdo_tutorial');

if($con->connect_error) {
    echo "Connection failed : " . $con->connect_error;
} else {
    echo "Connection established successfully!";
}

$username = "Kuldeep Verma";

$fetch_records = $con->prepare("Select * from employee_data where emp_name = ?");
$fetch_records->bind_param("s", $username);
$fetch_records->execute();

$result = $fetch_records->get_result();
$row = $result->fetch_assoc();

echo "<pre>";
print_r($row);
echo "</pre>";