<?php

//* in_array() : Function is used to find out if an element present inside array or not, take 2 arguement first is searching element and second is subject in which we want to search.

$fruit = array("apple", "banana", "watermelon");

if (in_array("banana", $fruit)) {
    echo "Banana is Found in the array";
} else {
    echo "Banana is not in the array";
}
