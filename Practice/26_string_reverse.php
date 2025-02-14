<?php

//* Reverse string without any function

$string = "Hello";

$rev = "";
for($i = strlen($string) - 1; $i >= 0; $i--) {
    $rev .= $string[$i];
}

echo $rev;
echo "<br>";

$data = 1;
if(empty($data)) {
    echo "Data is empty";
} else {
    echo "Data is not empty and the value : $data";
}