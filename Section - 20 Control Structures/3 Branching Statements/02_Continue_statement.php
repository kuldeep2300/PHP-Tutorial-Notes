<?php
/* 
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        continue;
    }

    echo "$i <br>";
} */
/* 
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        continue;
    }

    echo "$i <br>";
} */

$i = 0;
while($i < 10) {
    $i++;
    if($i % 3 == 0) {
        continue;
    }

    echo "$i <br>";
}

