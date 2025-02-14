<?php

$grade = 40;
/* 
if ($grade >= 90) {
    echo "Grade : A";
} elseif ($grade >= 80) {
    echo "Grade : B";
} else if ($grade >= 70) {
    echo "Grade : C";
} else if ($grade >= 60) {
    echo "Grade : D";
} else if ($grade >= 50) {
    echo "Grade : E";
} else {
    echo "Fail";
} */

if($grade >= 90) {
    echo "Grade : A";
} elseif ($grade >= 80) {
    echo "Grade : B";
} else if ($grade >= 70) {
    echo "Grade : C";
} else if ($grade >= 60) {
    echo "Grade : D";
} else if ($grade >= 50) {
    echo "Grade : E";
}

// echo "I have checked result, but no conditions matched";

//* Find even and odd numbers

$number = "kuldeep";

if(($number % 2) == 0) {
    echo "$number is even number";
} elseif(($number % 2) != 0) {
    echo "$number is odd number";
} else {
    echo "It is not a number";
}