<?php
/* 
for($i = 1; $i <= 10; $i++) {
    echo "$i <br>";
    if($i == 5) {
        break;
    }
} */

$i = 1;
do {
    echo "$i <br>";
    if ($i >= 10) {
        break;
    }
    $i++;
} while (true);
