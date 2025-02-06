<?php
// $myname="Khanam";
// echo var_dump($myname);

// $age;    //? If we simply print this age variable then it will show us error, and if we assign it to the null then error will be gone because we explicitly tell that $age is having null value.
// $age=null;
$age = '0'; // Same below line apply for also this
// $age=0;  //? 0 meaning falsy value but it type is int and in ternary operator it will print "It doesn't have value" because 0 meaning falsy value.
// echo $age;
// echo var_dump($age);

// echo ($age)?"It has value":"It doesn't have value";

//? is_null() function is used to check that a variable is null or not.

// echo is_null($age); // for 0 value it return false meaning not print anything.

// echo (is_null($age)) ? "It doesn't have value" : "It has value";
// echo (!is_null($age)) ? "It has value" : "It doesn't have value";

//? unset() - This function is removing the value inside the variable and also remove the complete variable as well.

$subject = "PHP";
echo $subject;
unset($subject);
echo $subject; // Warning: Undefined variable 