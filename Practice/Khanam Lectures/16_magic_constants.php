<?php

echo "Give current code line : " . __LINE__ . "<br>";
echo "File name : " . __FILE__ . "<br>";
echo "Directory name : " . __DIR__ . "<br>";

function display_data() {
    echo "Inside function function name : " . __FUNCTION__;
}

display_data();