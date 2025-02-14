<!-- Variable Typing :  
It is a concept of coverting one data type to another data type. 
As we know php is dynamically typed language inwhich data type decided during the run time of script.

In this tutorial we manily focus on integer and string only.
 -->

<?php 

// $num1 = 10;
// $num2 = 20;
// echo $num1 * $num2; // using astric operator we multiply both

//* Conversion of String to Integer
//* When integer string and integer number multiply then php automatically convert string integer into integer.
// $num1 = "10";
// var_dump($num1);
// $num2 = 20;
// var_dump($num2);
// $result = $num1 * $num2;
// var_dump($result);

//* But when multiply string into integer then it will give us error
// $num1 = "apple";
// var_dump($num1);
// $num2 = 20;
// var_dump($num2);
// $result = $num1 * $num2;
// var_dump($result);


//* Conversion of Integer to String 
$age = 21;
var_dump($age);
$stringConversion = (string) $age;
var_dump($stringConversion);


