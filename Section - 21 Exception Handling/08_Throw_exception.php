<?php

//* In this lecture we will learn about how to create own exception handler and which will handle our own throw exception.

function my_custom_exception($exception) {
    echo "Uncaught error : " . $exception->getMessage();
}

set_exception_handler('my_custom_exception'); // Using this we set our exception handler a function, so whenever we throw an exception then set_exception_handler call the set exception handler function and do its work meaning showing us the error properly.

throw new Exception("Exception from our end");