<?php

$person = [
    "person1" => [
        "name" => "Kuldeep",
        "age" => 21,
        "city" => "Kota"
    ],
    "person2" => [
        "name" => "Sneha",
        "age" => 21,
        "city" => "Kota"
    ],
    [1, 2, 3]
];

// For array we can't use echo we know that
echo "<pre>";
print_r($person);
echo "</pre>";
// var_dump($person);
echo "<br>";

//* To access individual key data
// echo $person['person1'];  Give error because it will array
/* 
echo "<pre>";
print_r($person['person1']);
echo "</pre>";

echo "<pre>";
print_r($person['person2']);
echo "</pre>";

echo "<pre>";
print_r($person[0]);
echo "</pre>";
*/

//* To access individual key array values directly
//? For person1 data
echo $person['person1']['city']."<br>";
echo $person['person1']['name']."<br>";
echo $person['person1']['age']."<br>";

//? For person2 data
echo $person['person2']['city']."<br>";
echo $person['person2']['name']."<br>";
echo $person['person2']['age']."<br>";
