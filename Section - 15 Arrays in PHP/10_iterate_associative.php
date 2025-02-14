<?php
// ITERATE ASSOCIATIVE ARRAY
$person = [
    "name" => "Kuldeep",
    "age" => 21,
    "city" => "Kota"
];

echo "<pre>";
print_r($person);
echo "</pre>";

//* Print Individual values
// echo $person['name'] . "<br>";
// echo $person['age'] . "<br>";
// echo $person['city'] . "<br>";

//* Using foreach - But it will print only values, but we want only in key pair format
// foreach($person as $values) {
//     echo $values."<br>";
// }

//* Syntax of for each to print in key => value format
/* foreach($person as $key=>$values)
    {
        // Code here
    }
 */

// foreach($person as $keyData => $valueData) {
//     echo "$keyData => $valueData <br>";
// }

//* Syntax for print on keys using foreach
foreach(array_keys($person) as $keys) {
    echo "$keys <br>";
}