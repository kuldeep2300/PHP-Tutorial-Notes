<?php

$mysqli = new mysqli('localhost', 'root', '', 'pdo_tutorial');

if($mysqli->connect_error) {
    die("Connection failed : " . $mysqli->connect_error);
} 