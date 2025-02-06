<?php

/* Indexed Array : In this type of array we don't have to specify index number or value of array, it will automatically start from 0th index, in this we change the entire array, each value, and each data type also, and we can also insert value line-wise or on at any index.  */

$fruit = ["apple", "mango", "banana", "cherry"];
echo "<pre>";
print_r($fruit);
echo "</pre>";

$fruit[] = "watermelon";
echo "<pre>";
print_r($fruit);
echo "</pre>";

$fruit[7] = "grapes";
echo "<pre>";
print_r($fruit);
echo "</pre>";

$fruit[] = "tomato";
echo "<pre>";
print_r($fruit);
echo "</pre>";

$fruit[] = [1, 2, "Banana", true, false];
echo "<pre>";
print_r($fruit);
echo "</pre>";

foreach($fruit as $values) {
    // echo $values."<br>";     It will not print 9th index array that's why use print_r
    print_r($values);
    echo "<br>";
}

