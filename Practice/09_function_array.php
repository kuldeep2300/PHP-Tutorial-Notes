<?php

//* How do you define a function in PHP that accepts an array as an argument?
// You can define a function that accepts an array as an argument simply by typing array in the parameter.

function print_data(array $arr) {
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

$array = [
    "name" => "Kuldeep Verma", 
    "age" => 21, 
    "city" => "Kota"
];

print_data($array);
// print_data([1, 2, 3]);
// print_data(1);