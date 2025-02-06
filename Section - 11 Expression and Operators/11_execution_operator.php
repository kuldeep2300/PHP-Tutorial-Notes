<?php
// In PHP, the execution operator is the backtick (``) or the shell_exec function. The backtick execution operator allows you to execute shell commands from within a PHP script. Here's an example using both the backtick operator and the shell_exec function.

// echo `dir`;
// echo `ls`;

$result = `mkdir data`;
echo $result;

// We can achieve same things without backtick using shell_exec() function

$result1 = shell_exec('mkdir data1');
echo $result1;
