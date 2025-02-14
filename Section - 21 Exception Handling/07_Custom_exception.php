<?php

//* In this we learn how to create custom exception and create multiple-catch block.

class MyOwnException extends Exception
{
    function myErrorMessage()
    {
        $error_msg = "Exception message : " . $this->getMessage();
        return $error_msg;
    }
}
function division($number)
{
    try {
        if ($number <= 0) {
            throw new Exception("Number cannot be zero!!");
        }

        if ($number >= 10) {
            throw new MyOwnException("Number cannot be greater than 10<br>");
        }

        $result = 4 / $number;
        echo $result;
    } catch (MyOwnException $e) {
        echo $e->myErrorMessage();
    } catch (Exception $e) {
        echo $e->getMessage();
    } finally {
        echo "<br> I will be executed in both case <br>";
    }
}

division(2);
echo "<br>";
division(0);
echo "<br>";
division(12);