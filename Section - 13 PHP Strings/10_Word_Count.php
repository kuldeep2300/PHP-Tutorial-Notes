<?php 
//? str_word_count() Function : Used to calculate words in a string.

$str1 = "Iam simple sentence";
$result = str_word_count($str1); // It take 3 paramter, 1 first string name, 2nd [0 - For simple show count of word (its default value), 1 - print in normal array, 2 - print in associative array manner], third is optional

$result1 = str_word_count($str1, 1);
$result2 = str_word_count($str1, 2); 

// echo $result;
// echo $result1; // Give warning array to string conversation, use print_r()

print_r($result1);
echo "<br>";
print_r($result2);   // In this 'Iam' index start with 0, 'simple' index start with 4, 'sentence' index start with 11 that's the difference.
