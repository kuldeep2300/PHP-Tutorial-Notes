<?php

$person = [
    "person1" => [
        "name" => "Kuldeep",
        "age" => 21,
        "city" => "Kota"
    ],
    "person2" => [
        "name" => "Priyanshi",
        "age" => 21,
        "city" => "Bangalore"
    ]
];

/*
foreach($person as $values) {
    echo "<pre>";
    print_r($values);
    echo "</pre>";
    echo "<br>";
}
*/

//* Print in `Key => Value` Pairs
/* foreach($person as $keys => $values) {
    echo "$keys =>";
    print_r($values);
    echo "<br>";
} */

//* First foreach loop print values which are array type and we will print this array again using 2nd foreach loop.
// foreach($person as $values) {
//     foreach($values as $value) {
//         echo "$value, ";
//     }
//     echo "<br>";
// }

//* First foreach loop print values which are array type and we will print this array again using 2nd foreach loop, and using this approach we will print in `key => value` pair.

foreach($person as $label => $values) {
    echo "$label : <br>";
    foreach($values as $keys => $value) {
        echo "$keys => $value, ";
    }
    echo "<br>";
}