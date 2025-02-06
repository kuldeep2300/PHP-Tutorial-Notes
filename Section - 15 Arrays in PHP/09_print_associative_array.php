<?php
// PRINT ASSOCIATIVE ARRAY

// $person = [
//     "name" => "Kuldeep",
//     "age" => 21,
//     "city" => "Kota",
//     3 => "Verma"
// ];

// echo $person; // Warning :  Array to string conversion 
// echo "<pre>";
// print_r($person);
// echo "</pre>";

//* Access any value - wrap key inside single or double quotes
// echo $person['name']."<br>";
// echo $person[3]."<br>";
// echo $person['city']."<br>";
// echo $person['age']."<br>";

//? ARRAY FUNCTIONS
//* 1) Only Keys

// $person = [
//     "name" => "Kuldeep",
//     "age" => 21,
//     "city" => "Kota",
//     3 => "Verma"
// ];
// print_r(array_keys($person));
// print_r(array_keys($person)[1]);    // To find specific key, here it will first find all the keys then, in these keys I want the 1st index key name, and it will return it to me.

//* 2) Only Values

// print_r(array_values($person));
// print_r(array_values($person)[2]); // Same like above

//* Inserting elements with key - value pair
$person = [
    "name" => "Kuldeep",
    "age" => 21,
    "city" => "Kota",
    3 => "Verma",
    // 1 => "One"
];

echo "<pre>";
print_r($person);
echo "</pre>";

$person['role'] = "MERN Stack Developer";
echo "<pre>";
print_r($person);
echo "</pre>";

//? Checking a key that not exist

// echo $person[1]; // To avoid this use
echo (empty($person[1]) ? "Key does not exist" : "Key exist with value : $person[1]");

// $person[] = ["gender" => "Male"];
// echo "<pre>";
// print_r($person);
// echo "</pre>";


$person['gender'] = 'Male';
echo "<pre>";
print_r($person);
echo "</pre>";


