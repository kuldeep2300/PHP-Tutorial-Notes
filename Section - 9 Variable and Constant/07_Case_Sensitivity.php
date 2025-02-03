<?PHP 
// Does case sensitivity apply for all?
//* In php case sensitivity does not apply for all things. PHP, variable and echo names are `case-sensitive` but other like functions are `case-insensitive`.

$myName = "Kuldeep ";
$MyName = "Verma";

echo $myName;
ECHO $MyName;

//* It apply for variable and echo but not for function for exmaple.
// Even if both have different case they will be treated as same function, and show error.

// function message() {
//     echo "Welcome to my website";
//     echo "<br>";
// }

// message();

// function MESSAGE() {
//     echo "Welcome to my website again";
//     echo "<br>";
// }
