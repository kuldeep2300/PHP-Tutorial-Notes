<?php

$db_name = "mysql:host=localhost;dbname=pdo_tutorial";
$username = "root";
$password = "";

try {
    $pdo = new PDO($db_name, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed : " . $e->getMessage());
}
