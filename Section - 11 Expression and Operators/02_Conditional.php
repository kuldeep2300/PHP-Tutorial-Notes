<?php

//* 1) Ternary Operator Syntax: Shortend of if-else
// (condition) ? expression_if_true : expression_if_false;

// echo (true) ? "True Value"."<br>" : "False Value"."<br>";
// echo (false) ? "True Value" : "False Value"; 

$flag1 = (true) ? "True Value" . "<br>" : "False Value" . "<br>"; 
// echo $flag1;

$age = 18;
// $canVote = ($age >= 18) ? "Person can vote" : "Person can't vote";
// echo $canVote;

$canVote = ($age >= 18) ? true : false;
echo "Can Vote : " . ($canVote ? 'Yes' : 'No');  // We wrap it complete so that it will give both result.
