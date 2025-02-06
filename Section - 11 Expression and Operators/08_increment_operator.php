<?php
// Increment Operator
/*
1- Pre- increment ++varaible 
2- Post- increment variable++
*/

// +=
// $count=1;
// $count=$count+1;
// $count+=1;

// 1- Pre- increment ++varaible
// $a=10;
// echo $a;
// echo ++$a;


// $x=5;
// $y=++$x;// 6
// echo $y, $x;


// 2- Post- increment variable++
// $a=10;
// echo $a;
// echo $a++;
// echo $a;


// $x=5;
// $y=$x++;  //5
// echo $x , $y;



// Assignment 
$a = 5;
$b = ++$a + $a++; // b = 6 + 6 = 12, a = 7
$c = $b++ + ++$a;   // c = 12 + 8 = 20 , b = 13


echo "The value of \$a is: $a", "<br>";
echo "The value of \$b is: $b", "<br>";
echo "The value of \$c is: $c", "<br>";
