<!--//* Superglobal Variable 

Several predefined variables in PHP are "superglobals", which means they are available in all scopes throughout a script. There is no need to do global $variable; to access them within functions or methods.

These superglobal variables are:

• $GLOBALS  (For globals we don't have underscore (_))
• $_SERVER
• $_GET
• $_POST
• $_FILES
• $_COOKIE
• $_SESSION
• $_REQUEST
• $_ENV

-->

<?php 

// echo $_SERVER['PHP_SELF']."<br>";
// echo $_SERVER['SERVER_NAME'];

$num = 10; 
echo $num."<br>";

function data() {
    // We can directly access any variable using superglobal variable, without need to create of global variable
    echo $GLOBALS['num']."<br>";
    $GLOBALS['num'] = 30;   // We can also change value because now num is global
}

data();
echo $num;