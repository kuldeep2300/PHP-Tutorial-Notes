<?php
//* Example - 1
// $fruit = ["apple", "banana", "mango", "cherry", 1];
// echo "<pre>";
// print_r($fruit);
// echo "</pre>";

// echo "<br>";

// echo $fruit[0] . "<br>";
// echo $fruit[1] . "<br>";
// echo $fruit[2] . "<br>";
// echo $fruit[3] . "<br>";
// echo $fruit[4] . "<br>";

//* Instead of printing individually we can use - For Each Loop
/* Syntax : (In array will be array name it can't be changed, but $value can be give any name which contain arrays value one by one)
foreach($array as $values) {
    // Code has to executed here
} */

//! This is suggest because only this one is mainly important and we should use only this type of foreach type.
// foreach ($fruit as $values) {
//     echo $values . "<br>";
//     print_r($fruit);
// }

//* Example - 2
$data = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

// echo "<pre>";
// print_r($data);
// echo "</pre>";

// echo "<br>";

// foreach ($data as $month) {
//     echo $month . "<br>";
// }


//* Instead of this month variable we can also print it using a counter.
// $counter = 0;
// foreach ($data as $month) {
//     echo $data[$counter] . "<br>";
//     $counter++;
// }

//* When you also want to print index of each value

$counter = 0;
foreach ($data as $month) {
    echo "[$counter] => $month<br>";
    $counter++;
}
