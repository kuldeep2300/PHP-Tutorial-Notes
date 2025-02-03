<!-- Rules of creating a variable
1. Variable names in PHP are case-sensitive
2. Variable names must start with a dollar sign ($) followed by a letter or an underscore.
3. After the initial dollar sign, variable names can contain letters, numbers, and underscores, don’t use any special characters.
4. Variable can only contains a-z, A-Z. 0-9 and _
5. No space in the variable names .
6. Variable names cannot start with a number.
7. PHP has a set of reserved words that cannot be used as variable names because they are part of the language's syntax. Examples include echo, if, else, while, and others.
8. PHP is a dynamically-typed language, meaning that you do not need to declare the data type of a variable explicitly. The data type is determined based on the assigned value.
9. PHP allows variable interpolation in double-quoted strings.
10. Directly define and assign value to variable. -->

<?php

//? 1)
$fruit = "Mango";
// echo $fruit;
// echo $FRUIT;

//? 2) 
$_color = "red";
// echo $_color;

//? 3) 
$vegetabels1 = "brinjal";
// echo $vegetabels1;

//? 4) 
// $vegeta$bels1; //? parse error this will not work

//? 5) 

//? 7) 
$else = "else";
// echo $else;     // it will work coz php is Dynamically typed language, but not recommended to use keywords.

//? 8) 
// int age ; // get error
// $age = 20;   // run properly



