<?php

// Example - 1
function printName($myName)
{
    return $myName;
}

$name = "Kuldeep";
echo printName($name) . "<br>";

// Example - 2
function jobOffer($offer)
{
    if (empty($offer)) {
        echo "No job offer yet!<br>";
        return;
    }

    switch ($offer) {
        case 'Analyst':
            echo "Congratulations, you got offer for $offer job.<br>";
            break;
        case 'Engineer':
            echo "Congratulations, you got offer for $offer job.<br>";
            break;
        default:
            echo "Invalid";
    }
}

jobOffer("Analyst");
jobOffer("Engineer");
jobOffer("");
