<?php
/* 
$i = 1;
while($i <= 50){
    echo "$i <br>";
    $i++;
}*/

//* Print even number for loop login in while loop
echo "Using while loop <br>";

$value = 1;
while ($value <= 10) {
    $result = $value % 2;
    if ($result > 0) {
        echo "Odd number : $value <br>";
    }

    $value++;
}
