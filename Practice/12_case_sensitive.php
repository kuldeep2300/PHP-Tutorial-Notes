<?php

//* Is php array case-sensitive - Yes 
//* Is php functin is case-sensitive - NO

$array1 = [1, 2, 3, 4, 5];
$Array1 = [1, 2, 3, 4, 5];

// var_dump($array1);
// var_dump($Array1);

print_r($array1);
echo "<br>";
print_r($Array1);

/* function printData() {
    echo "I am function 1 <br>";
}

function printDAta() {
    echo "I am function 2 <br>";
}

printData();
printDAta(); */