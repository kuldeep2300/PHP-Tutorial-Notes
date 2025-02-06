<?php

/* In PHP, the strcmp() function is used to compare two strings. It returns 0 if the strings are equal, a negative value if the first string is less than the second one, and a positive value if the first string is greater than the second one based on their ASCII values. */

// $string1 = "apple";
// $string2 = "banana";
// $result = strcmp($string1, $string2); // string1 < string2 (Output : -1)

// $string1 = "banana";
// $string2 = "banana";
// $result = strcmp($string1, $string2); // string1 = string2 (Output : 0)

$string1 = "23";
$string2 = "456";
$result = strcmp($string1, $string2); // string1 < string2 (Output : -1)
// echo $result;

if ($result == 0) {
    echo "$string1 and $string2 are equal";
} elseif ($result < 0) {
    echo "$string1 is less than $string2";
} else {
    echo "$string1 is greater than $string2";
}

