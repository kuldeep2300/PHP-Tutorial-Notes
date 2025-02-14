<?php

/* We use heredoc when we are dealing with large amount of data, and storing large string in the one variable. In this type of large string everything should be formatted like we write. */
 
$myname = "Kuldeep";
$age = 21;

// This is the syntax of heredoc and we paste here data which we want to print.
$data = <<<EOD
"My name is Kuldeep"
My age is $age
I like to play with star pattern

*
* * 
* * *
* * * *

Multiply your name with three times 
Output : $myname$myname$myname

(condition) ? "True Statement" : "False Statement"

$myname
$age
"$myname"  
'$age'

EOD;

// echo $data;      // If you want to print in the exactly line by line then use pre tag.
echo "<pre>$data</pre>";

// If we try to print it - it will give us error that condition is not defined but using heredoc we can print it easily.

// $result = (condition) ? "True Statement" : "False Statement";
// echo $result;