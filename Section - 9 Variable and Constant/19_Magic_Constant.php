<!-- They are used for debugging, logs,  -->
<?php

echo "MAGIC CONSTANTS"."<br>";

// echo "Give current line number : " . __LINE__;
// echo "Give complete file path of this file : " . __FILE__;
// echo "Give Directory of this file : " . __DIR__;

function myFunction() {
    echo "Give Function Name : " . __FUNCTION__;
}

myFunction();