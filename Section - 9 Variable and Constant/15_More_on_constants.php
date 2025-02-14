<?php
//* 1) Can we change the value of constant? - No

// define("MYNAME", "Kuldeep");
// echo MYNAME;
// define("MYNAME", "Verma");      // Give error 
// echo MYNAME;

//* 2) Same name with Variable and Constant - It will work coz variable have $ sign but constant not.

// $fruit = "apple ";
// echo $fruit;

// $FRUIT = "APPLE ";
// echo $fruit;
 
// define('FRUIT', 'mango');
// echo FRUIT;

//* 3) Isset() method for constant - We can't use isset() function on constants it gives us error.

// define('PI', ''); //  Cannot use isset() on the result of an expression (you can use "null !== expression" instead)
// echo isset(PI);

//* 4) Constant Method - Use to access constant value, and remember always wrap constant name inside single or double quote.

define('SUBJECT', "PHP ");
echo SUBJECT;

echo constant('SUBJECT');

