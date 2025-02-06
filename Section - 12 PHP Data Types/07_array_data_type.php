<?php

$numberArray = array(1,2,'3',4,5, true, false, null);
echo "<pre>";
var_dump($numberArray);
echo "</pre>";
print_r($numberArray);

//? To print specific value
print_r($numberArray[3]);

$fruit = ['mango', 'apple'];
// print_r($fruit);

print_r($fruit[1]);