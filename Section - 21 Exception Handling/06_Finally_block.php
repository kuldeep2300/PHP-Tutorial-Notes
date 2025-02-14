<?php

//* Finally Block : If there is error or not, the finally block always executes.

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
    }finally {
        echo "<br> I will be executed in both case <br>";
    }
}

division(2);
echo "<br>";
division(0);
