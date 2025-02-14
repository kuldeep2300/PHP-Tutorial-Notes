<?php

//? Explode function - used to convert string into array. Important for interviews.
/* It is used when if you are having CSV (comma separated data), meaning it will convert our string into separated comma in the array form. */ 

/* Delimiter - comman, - , /, space or anything by which we want to separate data.
   string - passing our string
   third parameter max limit of variable - (Optional)
*/
//? Syntax :  explode(string $delimiter, string $string, int $limit = PHP_INT_MAX);

// $fruit = "apple, mango, grapes, banana";   // data of csv files
$fruit = "apple| mango| grapes, banana";     // data of csv files
// echo $fruit;
// var_dump($fruit);
// echo "<br>";

// $result = explode("|", $fruit); // But we don't have | (pipe) in string so it will print complete $fruit string as a index value, so treat each one separetely we must have | (pipe) in our string also.

// $result = explode(",", $fruit);  // it will select all the elements to print it each separately.
// $result = explode(",", $fruit, 3);   // it will till apple, mango, and treate grapes, banana as 2nd index meaning 3rd value only.

// echo $result;    // Warning : Array to string : to print array we can't use echo we have to use print_r($result);
print_r($result);

