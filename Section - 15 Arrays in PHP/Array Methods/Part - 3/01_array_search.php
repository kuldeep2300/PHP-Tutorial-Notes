<?php
//* array_search() method : It will check an element present inside the array or not like in_array() mehtod but instead of returning true and false, it will return the index value of the element & if the element is not present inside the array then it will return false & print nothing.

$fruits = ["apple", "banana", "cherry", "watermelon", "date", "elderberry"];

// $key = array_search("cherry", $fruits);
// echo $key;

// $key = array_search("apple", $fruits);  // Output : 0th index
// echo $key . "<br>";


/* if($key) { // when 0th index then it will execute else part, that's not write way to print it.
    echo "Element is present";
} else {
    echo "Element is not present";
} */

$key = array_search("pineapple", $fruits);  // Output : false
echo $key . "<br>";

if ($key === false) {
    echo "Element is not present";
} else {
    echo "Element is present at $key position";
}
