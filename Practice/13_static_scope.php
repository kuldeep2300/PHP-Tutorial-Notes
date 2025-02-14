<?php

function print_data() {
    static $num = 2;
    echo "$num <br>";
    $num+=2;
}

for($i = 1; $i <= 10; $i++) {
    print_data();
}