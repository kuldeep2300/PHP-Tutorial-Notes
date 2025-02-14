<?php

//* In this tutorial first read from pdf 6 & 7 from notes, then in this we learn how to set cookie and view cookie.

$category_name = "Food";     // set a cookie name by storing it into variable
$category_value = "pizza";  // set a value of the cookie by storing cookie value in the variable

//? Set a cookie
/* Its arguements.

1) 1st arg cookie name 
2) 2nd arg cookie value
3) 3rd arg expire time in seconds
4) path, here path '/' meaning I want to access this cookie on my entire website or page. */

setcookie($category_name, $category_value, time() + 86400, '/'); 

// echo "Cookie is set now.";
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php 
    if(!isset($_COOKIE[$category_name])) {
        echo "Cookie is not set";
    } else {
       echo $_COOKIE[$category_name];
    }
    // When cookie is not set and given directly
    /* if(!isset($_COOKIE['myCookie'])) {
        echo "Cookie is not set";
    } else {
       echo $_COOKIE['myCookie'];
    } */
  ?>  
</body>
</html>