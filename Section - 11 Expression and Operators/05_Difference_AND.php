<!-- Logical operators: Difference between Logical and - && -->

<?php
// &&- higher priority
// and - lower priority

$data1 = true && false;
echo $data1 ? "true" : "false";  // false
$data2 = true and false;
echo $data2 ? "true" : "false";  // true
