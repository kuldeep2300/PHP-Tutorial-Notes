<?php

function increment(&$value) {
    $value++;
}

$x = 5;
echo "Before : $x <br>";
increment($x);
echo "After : $x <br>";