<?php

//? Write file
// file_put_contents("text.txt", "Hello PHP How are you i am find, what are you doing now.");

//? Read file
// echo file_get_contents("text.txt");

//? Delete file 
// unlink("text.txt");


//* Open and read the file content.
/* $file = fopen("example.txt", "r");
// $content = fread($file, filesize("example.txt")); // We can use both methods
$content = fgets($file, filesize("example.txt"));
echo $content;
fclose($file); */

//* Open and write data inside a file
/* $file = fopen("example.txt", "w");
fwrite($file, "Hello Kuldeep Verma");
fclose($file);
 */
/* $file = fopen("example.txt", "r");
$content = fread($file, filesize("example.txt"));
echo $content;
fclose($file); */

//* CHECK FOR A PARTICULAR FILE EXIST OR NOT

/* if(file_exists("example.txt")) {
    echo "File exists";
} */

/* if(file_exists("example1.txt")) {
    echo "File exists";
} else {
    echo "File not exists";
} */


