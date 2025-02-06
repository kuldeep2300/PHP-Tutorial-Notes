<?php 

// strtolower() function used to make complete string into lowercase.

$myName = "kuLdEEp vErMa";
// echo $myName;
// echo ucfirst($myName)."<br>";

// It will make complete string small, so after completely converting into small then we apply ucfirst() or ucwords() function to make only first letter into capital.

echo ucfirst(strtolower($myName))."<br>";
echo ucwords(strtolower($myName));