<?php
// mysql_connect
//mysqli_connect
//PDO

$con=mysqli_connect('localhost','root','','validation_form');
if(!$con){
    die("Connection Failed".mysqli_connect_error());
}

?>