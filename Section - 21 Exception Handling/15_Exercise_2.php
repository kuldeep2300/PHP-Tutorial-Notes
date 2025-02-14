<?php

//* Print even number like previous type.

function printEvenNumber($num1, $num2)
{
    if ($num1 <= 0 || $num2 <= 0 || $num1 === $num2) {
        throw new Exception("Please enter valid number!");
    } elseif ($num1 > $num2) {
        throw new Exception("Please enter valid range!");
    }

    for($i = $num1; $i <= $num2; $i++) {
        if($i % 2 === 0) {
            echo "Even number : $i <br>";
        }
    }
}

function handle_exception($exception)
{
    echo $exception->getMessage();
}

set_exception_handler('handle_exception');
printEvenNumber(1, 20);
