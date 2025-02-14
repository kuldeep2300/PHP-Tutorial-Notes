<?php
//* For indexed array

$family = ["Mother", "Father", "Sister", "Brother", "Myself"];

foreach($family as $value) {
    echo "$value <br>";
}

//* Same thing using for loop
echo "<br> Using for loop <br> <br>";
for($i = 0; $i < count($family); $i++) {
    echo "$family[$i] <br>";
}

//* For Associative array

echo "<br>For Associative array <br><br>";

$person = [
    "name" => "Kuldeep",
    "age" => 21,
    "city" => "Kota"
];

foreach($person as $key => $value) {
    echo "$key - $value <br>";
}