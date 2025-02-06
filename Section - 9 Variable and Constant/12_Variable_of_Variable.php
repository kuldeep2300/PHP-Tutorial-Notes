<?php 

// $fruit = "apple";
// echo $fruit."<br>";

// $$fruit = "red"; // $(apple) => $apple = "red"; (we are creating another variable by using existing variable value)
// echo $$fruit."<br>"; // Both will print `red`;
// echo $apple;

$variablename = "dynamicvar";
$$variablename = " Greeting";

// echo $variablename;
// echo $$variablename;
// echo $dynamicvar;

//* We should avoid the use of this concept for better readability, this is rare concept in php, the simple meaning of this here can give dynamic value as a variable name, and we can also declare a variable with `$100` like this.

$num1 = 100;
$$num1 = 200;

echo $num1."<br>";
echo $$num1; // This will work
// echo $100;  // This will not work ❌
echo ${'100'}; // To use above logic we can implement like this then it will print result.
