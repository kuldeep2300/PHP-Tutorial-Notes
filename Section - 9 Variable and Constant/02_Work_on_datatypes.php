<!-- Working With DataTypes 

We can change a variable value as many as number of times there is no limit in php.
-->

<?php
//? 1) Can variable change its value - 
$name = "Kuldeep";
// echo $name;

// $name = "Sneha";
// echo '<br>';
// echo $name;

// $name = 6;  // we can also assign number value
// echo '<br>';
// echo $name;

//? 2) Declare strings
$language = "PHP ";
$message = "I Love";

// echo $message;
// echo $language;

//? 3) Combining String - For combining string we can (.) dot operator, and also we can (,) comma operator but comma not work every time so it is preffered for string combining use (.) dot operator
// $result = $message,"-",$language; ❌ (Not work parse error)
// $result = $message." - ".$language;

// echo $result;   // also use - echo $message." - ".$language;

//? 4) String Interpolation - Writing variables inside double or single quotes, php support SI. If we write variable name then it will show us variable value otherwise treat as simple text.

// echo "message - $language";
// echo "<br>";
// echo "$message - $language";

//? 5) Defining Integer variable

$age = 20;
// echo $age;

//? 6) Can we combine different datatype variables and print it - Yes
// echo "$language $age";
// echo "My name is ".$name.". I am ".$age." years old";    // sometime it is frustating then we use string interpolation

// echo "My name is $name. I am $age years old";

//? 7) PHP is a loosely typed language means - In php we can directly assing value to variable without declaring their data types it is also called `Dynamically Typed Language`. Their data types changed based on the value during the runtime of the script.
//? So basically loosely typed language can change the data type of variable when script is running.

//! Languages like Java, C++ do not use dynamically typed language, they are (Statically typed language)




