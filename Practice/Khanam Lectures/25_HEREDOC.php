<?php

//* We use heredoc when we are dealing with large amount of data, and storing large string in the one variable. In this type of large string everything should be formatted like we write.

$name = "Kuldeep Verma";
$age = 21;

$data = <<<EOD

"My name is Kuldeep Verma"
My name is $name
I am $age years old

                                *
                                * * 
                                * * * 
                                * * * *

(condition) ? expression_if_true : expression_if_false; 
EOD;


echo "<pre>$data</pre>";