<?php

//* In this we learn using try-catch inside the function.

function division($number)
{
    try {
        if ($number <= 0) {
            throw new Exception("Number cannot be zero!!");
        }
        $result = 4 / $number;
        echo $result;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

division(2);
echo "<br>";
division(0);
