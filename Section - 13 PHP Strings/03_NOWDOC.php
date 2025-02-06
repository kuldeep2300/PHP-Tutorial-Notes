<?php

/* It works same like Heredoc but here variable substitutioning not be happening it will print $age instead of writing their value.

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
 */

$myname = "Kuldeep";
$age = 21;

// WE CAN WRITE LABEL NAME ANYTHING BUT IT SHOULD WE SAME AT BOTTOM CLOSING PART ALSO.
// $data = <<<MYLABEL   // If we simply write this then it will substitute string work as heredoc, the change is here only write starting label name in single quote only, if you use double quote then it will print values also.

// $data = <<<'1MYLABEL'    // Label name should not start with 1 or any number.
$data = <<<'MYLABEL'
"My name is $myname"
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

MYLABEL;

echo "<pre>$data</pre>";