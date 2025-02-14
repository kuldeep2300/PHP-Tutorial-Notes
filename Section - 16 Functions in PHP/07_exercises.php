<?php

//* Find totalMarks and percentage
function marks($science, $math, $social, $hindi, $english, $sanskrit) {
    $sum = $science + $math + $social + $hindi + $english + $sanskrit;
    return $sum;
}

$totalMarks = marks(90, 96, 94, 99, 100, 87);
echo "Total Marks : $totalMarks <br>";

function percentage($total) {
    $subject = 6;
    $result = $total / $subject;
    return $result;
}

$studentPercentage = percentage($totalMarks);
echo "Student Percentage : $studentPercentage";
