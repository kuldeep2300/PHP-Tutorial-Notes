<?php

// $myname = "Kuldeep";
// $result = strlen($myname);
// echo $data;

// $data = "";     // spaces will also be count
// $result = strlen($data);
// echo $result;    // Print 0

// $data = 0;
$data = 2;
// $result = strlen($data);
// echo $result;   //  print 1 because 0 have existence.

// $data = null;
// $result = strlen($data);
// echo $result;    // print 0 because null meaning no value.

//? USING THE CONCEPT OF IF-ELSE
// if(strlen($data) > 0) {
//     echo $data;
// } else {
//     echo "It is empty";
// }

//? USING THE CONCEPT OF EMPTY() FUNCTION TO CHECK A VARIABLE IS EMPTY OR NOT.

if(empty($data)) {  // for this function - 0 meaning empty okay so it will print 0 as empty.
    echo "It is empty";
} else {
    echo $data;
}