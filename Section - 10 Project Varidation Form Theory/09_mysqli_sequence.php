<?php
$conn=mysqli_connect('localhost','root','','php_tutorial');

// Unsafe user input
$user_input = "John's example; DROP TABLE users";
$escape_data=mysqli_real_escape_string($conn,$user_input);
// Use the user input directly (without escaping)
$query = "SELECT * FROM users WHERE username = '$escape_data'";
$result = mysqli_query($conn, $query);

while($row=mysqli_fetch_assoc($result)){
   echo $row['username'] ."<br>";
}
if ($result) {
    echo "Query executed successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}
 



