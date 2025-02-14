<?php

$category_name = "Food";
$category_value = "Pizza";

// setcookie($category_name, $category_value, time() + 86400, '/'); 

//* How to calculate time in seconds
/* 
time() : current time + time in seconds

1min = 60 seconds
60min (1hr) =  60 * 60 = 3600 seconds
24hr = 3600 * 24 = 86400 seconds (in a day)
2days =(86400 * 2)
30 days = (86400 * 30) */

setcookie("Gadgets", "Mobile", time() + 3, "/");

echo "Cookie is set"; 