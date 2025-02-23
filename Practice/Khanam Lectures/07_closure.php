<?php

//* What is a closure (anonymous function) in PHP? Provide an example. 
//A closure is an anonymous function that can capture variables from the surrounding scope. Example:

$greeting = "Hello";

$greet = function($name) use ($greeting) {
    echo "$greeting " . "$name";
};

$greet("Kuldeep");