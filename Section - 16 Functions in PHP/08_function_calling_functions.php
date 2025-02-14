<?php

//* It is concept where a function called another function, inside own.

function iceCups($flavor) {
    return $flavor * 2;
}

function iceCreamMachine($chocolate, $vanilla, $pineapple) {
    $chocolateCups = iceCups($chocolate);
    $vanillaCups = iceCups($vanilla);
    $pineappleCups = iceCups($pineapple);
    $result = "My chocolate cups are : $chocolateCups, vanilla cups are : $vanillaCups, and pineapple cups are : $pineappleCups";
    return $result;
}

$result = iceCreamMachine(2, 3, 6);
echo $result;