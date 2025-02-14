<?php

/* Rules of Creating Constants

1) Write constant name in uppercase. (Suggested).

define("MAXVALUE", 100);
echo MAXVALUE;

2) For larget constant name use underscore.

define("MAX_VALUE", 100);
echo MAX_VALUE;

3) Constant names are case-sensitive.

define('PI', 3.14); 
echo pi;    // Give error undefined constant pi;

4) Give always 2 arguement even if constant value is empty ("") but write at least 2 arguments otherwise it will give error.

define("MY_NAME"); ❌
define("MY_NAME", ""); ✅

5) Don't use reserved keywords as a contant name, it will give error.

define('WHILE', 'Loop'); // syntax error, unexpected token "while"
echo WHILE;

define('IF', 'Loop'); // syntax error, unexpected token "if"
echo WHILE;

*/

