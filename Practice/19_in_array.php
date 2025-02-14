<?php

$fruits = ['apple', 'banana', 'mango'];

$result = in_array('banana', $fruits);
var_dump($result);

if(in_array('kela', $fruits)) {
    echo "<br> Data is found in the array";
} else {
    echo "<br> Data is not inside the array!!";
}