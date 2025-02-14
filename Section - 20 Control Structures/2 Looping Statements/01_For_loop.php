<?php
/* 
echo 1;
echo "<br>";

echo 2;
echo "<br>";

echo 3;
echo "<br>";

echo 4;
echo "<br>";

echo 5;
echo "<br>";

echo 6;
echo "<br>"; */

//* For Loop

//? Syntax
// for(initialization, condition, increment/decrement)
/* 
for($i = 1; $i <= 5; $i++) {
    echo "$i <br>";
} */

//* Print odd numbers
for ($value = 1; $value <= 10; $value++) {
    $result = $value % 2;
    if ($result > 0) {
        echo "Odd number : $value <br>";
    }
}

echo "<br>";

//* Print even numbers
for ($value = 1; $value <= 10; $value++) {
    $result = $value % 2;
    if ($result == 0) {
        echo "Even number : $value <br>";
    }
}

echo "<br>";

//* Print odd number using - Decrement operator
for ($value = 10; $value >= 1; $value--) {
    $result = $value % 2;
    if ($result > 0) {
        echo "Odd number : $value <br>";
    }
}

echo "<br>";

//* Print even number using - Decrement Operator
for ($value = 10; $value >= 1; $value--) {
    $result = $value % 2;
    if ($result == 0) {
        echo "Even number : $value <br>";
    }
}

echo "<br>";

//* Without Initialization - It is mandatory to pass semicolon ;
$value = 1;
for (; $value <= 10; $value++) {
    $result = $value % 2;
    if ($result == 0) {
        echo "Even number : $value <br>";
    }
}

echo "<br>";

//* Without Initialization and increment/decrement - It is mandatory to pass semicolon ;
$value = 1;
for (; $value <= 10;) {
    $result = $value % 2;
    if ($result == 0) {
        echo "Even number : $value <br>";
    }
    $value++;
}

//! For condition part we can't do like this.