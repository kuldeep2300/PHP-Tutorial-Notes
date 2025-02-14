<?php

$number = 4;

/* $result = 5 / $number;
echo $result; */
/* 
if($number > 0) {
    $result = 5 / $number;
    echo $result;
} else {
    echo "Number cannot be divided by 0";
} */

try {
    if($number <= 0) {
        throw new Exception("Number cannot be divided by zero!!");
    }
    $result = 5 / $number;
    echo $result;
} catch(Exception $e) {
    echo $e->getMessage();
}