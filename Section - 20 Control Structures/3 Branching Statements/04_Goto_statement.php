<?php

$number = 12; 
if($number <= 0) {
    goto error_block;
}

error_block: 
    echo "I will be executed for all numbers.";