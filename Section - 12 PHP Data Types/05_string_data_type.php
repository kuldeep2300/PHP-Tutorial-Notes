<?php
$name1 = "Khanam";
$name2 = 'Saniya';

// echo $name1 . " " . $name2."<br>";

// echo $name1;
// echo '$name2';

// $data= $name1. $name2;   // It will work coz we are storing one concatenating string into data.
// $data= $name1, $name2;   // It will give us error coz string is also scalar data type and it can store only single value at a time.
// echo $data;

// echo $name1.$name2;
// echo $name1."-".$name2;
// echo "$name1-$name2";


// echo "PHP is backend \"programming\" language"."<br>";
// echo "\t\t\tPHP is backend \"programming\" language"."<br>";
// echo "\TPHP is backend \"programming\" language"."<br>";    // Capital T will be treated as only text.
// echo '\TPHP is backend \"programming\" language';    // All data in single quote will be treated as only text.


// $subject = "PHP";
// $subject = "  PHP";  // Spaces also count.
// echo $subject."<br>";
// echo strlen($subject);

$num1 = "10";
// $num1 = "abc";   it will give us error

var_dump($num1);
$num2 = 20;
var_dump($num2);
$data =  $num1 * $num2;
echo $data;
var_dump($data);