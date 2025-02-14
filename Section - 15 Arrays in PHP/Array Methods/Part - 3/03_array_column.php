<?php
//* array_column() method : Using this method we can access directly a same key data and print it as a column of same key data, but in different arrays.

$records = [
    [
        "id" => 101,
        "name" => "Kuldeep",
        "age" => 21
    ],
    [
        "id" => 102,
        "name" => "Saniya",
        "age" => 25
    ],
    [
        "id" => 103,
        "name" => "Krishna",
        "age" => 21
    ]
];

$names = array_column($records, "name"); // WE only want to print name key values from multidimensional array.

echo "<pre>";
print_r($names);
echo "</pre>";

$id = array_column($records, "id"); // WE only want to print id key values from multidimensional array.

echo "<pre>";
print_r($id);
echo "</pre>";

$age = array_column($records, "age"); // WE only want to print age key values from multidimensional array.

echo "<pre>";
print_r($age);
echo "</pre>";