<?php

//* In this we will learn about finally block output is printed first, then try output is be printed. When we set exception handler then we don't have to use catch block because when an exception is throw then it will directly catch by set_exception_handler.

function my_custom_exception($exception) {
    echo "Uncaught error : " . $exception->getMessage();
}

set_exception_handler('my_custom_exception');
// throw new Exception("Exception from our end.");

try{
    throw new Exception("Exception from our end.");
} finally {
    echo "<br> I will be executed in both case <br>";
}