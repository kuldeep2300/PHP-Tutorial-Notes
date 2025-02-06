<?php

//! This is very important type of array and used mostly in PHP.
/* Associative array : In this type of array we have to specify index by own, here index is known as key, basically here we store data in the form of `key => value` pair, and key here is used for finding any index or key value at any position. 

It's same like other array collection of different or mixed values.

When key value is number then we don't have to write key inside double quotes or single quotes, we can only write in quotes when we are writing string as a key.
*/

// $person = [
//     0 => "Kuldeep",
//     1 => true,
//     2 => 21,
//     3 => 15000.01,
//     10 => "Verma"
// ];

$person = [
    "firstName" => "Kuldeep",
    "lastName" => "Verma", 
    "age" => 21,
    "salary" => 15000.01,
    "isLogin" => true
];
