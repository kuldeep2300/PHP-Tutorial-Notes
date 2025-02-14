<?php

//* 4) array_key_exist() method : Checks if a given key or index exists in the array. It will return true meaning 1 print if the key is found otherwise return false & print nothing.
/* It takes 2 argument.
1) 1st argument will be the key which we are searching, which have mixed data type.
2) 2nd argument will be the array in which we want to search the key.
 */

$fruits = [
    "apple" => 5,
    "banana" => 2,
    "cherry" => 8,
    "grapes" => 1,
    1 => "One"
];

// echo array_key_exists("apple", $fruits);
// echo array_key_exists(1, $fruits);
// echo array_key_exists("Stawberry", $fruits) ? "Key is Present" : "Key is not Present!!";

//* Another way to do it using - isset()

/* if(isset($fruits[1])) {
    echo "Key is present"; 
} else {
    echo "Key is not present";
} */

/* if(isset($fruits[1])) {
    echo "Key is present"; 
} else {
    echo "Key is not present";
} */

if(isset($fruits["Stawberry"])) {
    echo "Key is present"; 
} else {
    echo "Key is not present";
}

