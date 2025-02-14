<?php
//* array_rand() method : Used to generate random index from array, using this index we can show random value in the array. 

$fruits = ["apple", "mango", "banana", "watermelon"];
// $randomKey = array_rand($fruits);
// echo "$randomKey <br>";
// echo $fruits[$randomKey];

$randomKey = array_rand($fruits, 3);    // Here it will generate 3 random keys which are in the form of array, that's why we can't print it using  ehco.
// echo "$randomKey <br>";
print_r($randomKey);
echo "<br>";

//* To print of these random array values
foreach($randomKey as $values) {
    echo "$fruits[$values] <br>";
}