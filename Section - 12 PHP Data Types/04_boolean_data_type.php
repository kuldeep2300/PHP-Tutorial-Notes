<?php
// 0, "" ,null ,"0"-false
// 1 , -1, 9,100,"khanam" -true
// true false TRUE FALSE    //? In boolean true print 1 and false print nothing. 

// $flag1=false;
// $flag1=true;
// $flag2=FALSE;
// var_dump($flag2);
// echo true;
// echo $flag2;

// echo ($flag1 || $flag2)?"True":"False";

$isLoggedIn = true;
// $isLoggedIn='true';
// echo $isLoggedIn;
$isUsername = "Kuldeep";
// $isUsername = "0";  // it have zero treated as integer give false.

// echo ($isLoggedIn && $isUsername) ? "Welcome $isUsername" : "Welcome Guest";

echo ($isUsername === "Kuldeep") ? "Welcome $isUsername" : "Welcome Guest";
