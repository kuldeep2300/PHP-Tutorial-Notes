<?php 

$fruit = "apple";
$fruits = 'apple';

// echo $fruit;
 
// //? Difference here we can use string interpolation using double quotes but can't use using single quotes
// echo "An $fruit a day keeps doctar away";
// echo 'An $fruit a day keeps doctar away';   // it will treat var as a text
$color = "red";
echo "$fruit - $color";
echo "$fruit".'$color';   ;   //echo "$fruit"'$color'   ❌
echo $fruit.$color;
