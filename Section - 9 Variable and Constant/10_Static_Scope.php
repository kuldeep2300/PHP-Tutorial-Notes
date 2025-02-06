<?php

// Problem :  We define a variable in function end when function execution complete "num" been deleted. When we print series again and again it will print 2 always because it's always initialize with 2 again and again.
// Solution : So to solve this problem me use static scope so that local variable reatin and not be deleted after function execution, and when num not be deleted then it will not be declared again and again, it only update its value again and again.

function series() {
    static $num = 2;
    echo $num."<br>";
    $num = $num + 2; // remember here only - num++ or num-- work, okay. These num+2 not work ❌
}

for ($i=0; $i < 10; $i++) { 
    # code...
    series();
}