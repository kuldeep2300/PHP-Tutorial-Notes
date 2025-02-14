<?php

//* In this we are going to learn about fetchAll() method, basically it convert complete data into array format. In which it show complete data in the form of multi-dimmensional array format. In this we learn how to apply fetchAll() for all fetching styles and also how to display data for all different styles. 

//? The main Difference between fetch() and fetchAll() is that, when we fetch/request data using fetch() method it is going to refresh server again and again, but using fetchAll() we received completed database data at once.

//? ADVANTAGE - The main advantage is that we don't need to use while loop to fetch data again & again because using fetchAll() entire data is received at one time.

include 'includes/connect.php';

$fetch_records = $con->query("Select * from employee_data");

//* 1) fetchAll()
/* $row = $fetch_records->fetchAll();

echo "<pre>";
print_r($row);
echo "</pre>";

//? Access a particular value
echo $row[0]['emp_name']; */

//* 2) PDO::FETCH_ASSOC
/* $row = $fetch_records->fetchAll(PDO:: FETCH_ASSOC);

echo "<pre>";
print_r($row);
echo "</pre>";

//? Access a particular value
echo $row[0]['emp_name']; */

//* 3) PDO::FETCH_NUM 
/* $row = $fetch_records->fetchAll(PDO:: FETCH_NUM);

echo "<pre>";
print_r($row);
echo "</pre>";

//? Access a particular value
echo $row[0][1]; */

//* 4) PDO::FETCH_BOTH
/* $row = $fetch_records->fetchAll(PDO:: FETCH_BOTH);

echo "<pre>";
print_r($row);
echo "</pre>";

//? Access a particular value
echo $row[0]['emp_name'];
echo "<br>";
echo $row[0][1]; */

//* 5) PDO::FETCH_OBJ
/* $row = $fetch_records->fetchAll(PDO:: FETCH_OBJ);

echo "<pre>";
print_r($row);
echo "</pre>";

//? Access a particular value
echo $row[0]->emp_name; */