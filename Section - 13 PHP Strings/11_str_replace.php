<?php
// Don't worry about mixed basically mixed is a datatype, we can search number, string that's why.
// Syntax : str_replace(mixed $search, mixed $replace, mixed $array or subject in which we are searching, int $count = null) : mixed

// $string = "Sample sentence\nSample Sentence \nSample Sentence";
// $result = str_replace("Sample", "Example", $string);
// $result = str_replace("Sample", "Example", $string, $count); // count, count how many time we replace Sample in $string.

// echo $string . "<br>"; 
// echo $result . "<br>";
// echo $count . "<br>";

$string = ["Sample sentence", "Another Sample sentence", "Yet Another Sample sentence"];
$result = str_replace("sentence", "data", $string);
// echo $result; to print array use print_r()
print_r($result);

