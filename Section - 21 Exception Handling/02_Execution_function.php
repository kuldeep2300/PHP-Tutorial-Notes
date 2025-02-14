<?php

function division($x, $y) {
    if($y <= 0) {
        throw new Exception("Number cannot be divided by zero or negative value!!");
    }
    $result = $x / $y;
    return $result;
}

try {
    $data = division(4, 0);
    echo $data;
} catch (Exception $e) {
    echo $e->getMessage();
}

echo "<br>I am executed";