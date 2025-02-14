<?php

function numberCheck($number) {
    if($number > 1) {
        throw new Exception("Number must be one or less than 1 !!");
    }
    return true;
}
/* 
numberCheck(1);
echo "Hello"; */

try {
    numberCheck(1);
    echo "Hello";
}catch(Exception $e) {
    echo $e->getMessage();
}