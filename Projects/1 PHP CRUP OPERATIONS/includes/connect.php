<!-- /* connect to database using
1) mysql_connect - it is deprecated (second one is enhanced version of this)
2) mysqli_connect
3) PDO (Advanced one) */
 
/* 1) Once the connection is established then we can perform any crud operations 
2) mysqli_connect_error() method will be used inside the die(). die() method is used for displaying error and the mysqli_connect()_error() method will display us the error message.
3) We concatenate methods and variables using ( . ) operator. 

Note - We not use mysqli_connect()_error() at deploying level to show error for security purposes, we can show logs, or error popups.

4) mysqli_close($con); after we have to also closed the connection, this is not compulsory but it is a good practice but in some scenarios it is important to close the connection for long scripts.

PHP automatic closes all the connection when it does perform all the operations.
*/
-->

<?php
// We use mysqli_connect() method for establishing the connection to the database without this we can't connect to the database. -->
$con = mysqli_connect('localhost', 'root', '', 'crudoperation');

if (!$con) {    // Only showing msg when connection is not established.
  // echo "Connection Failed!!!";
  // To show error in php we have some method use die() method to show erro
  die("Connection Failed!" . mysqli_connect_error());
}
?>
