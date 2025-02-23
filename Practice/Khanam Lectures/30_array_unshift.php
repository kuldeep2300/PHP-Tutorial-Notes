<?php

$fruits = ['apple', 'banana', 'cherry', 'watermelon'];

echo "<pre>";
print_r($fruits);
echo "</pre>";

array_unshift($fruits, "grapes");
array_unshift($fruits, 'papaya');
echo "<pre>";
print_r($fruits);
echo "</pre>";
