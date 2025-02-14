<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

echo $_POST['username'] . "<br>";
echo $_POST['age'];

$name = $_POST['username'];
$age = $_POST['age'];

echo "<br>";
echo "Name : $name and age : $age";
