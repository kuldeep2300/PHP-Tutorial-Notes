<?php

//* Example - 1
$day = 7;
switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
    default:
        echo "Invalid day";
}

echo "<br>";

//* Example - 2

$day = "Sat";
switch ($day) {
    case 'Mon':
        echo "Monday";
        break;
    case 'Tue':
        echo "Tuesday";
        break;
    case 'Wed':
        echo "Wednesday";
        break;
    case 'Thu':
        echo "Thursday";
        break;
    case 'Fri':
        echo "Friday";
        break;
    case 'Sat':
        echo "Saturday";
        break;
    case 'Sun':
        echo "Sunday";
        break;
    default:
        echo "Invalid day";
}

echo "<br>";

//* Exercise - Check if a number is greater than 10 or not using switch

$number = 1;
switch ($number) {
    case ($number > 10):
        echo "$number is greater than 10";
        break;
    case ($number == 10):
        echo "$number is equal to 10";
        break;
    case ($number < 10):
        echo "$number is less than 10";
        break;
    default:
        echo "Invalid number";
}
