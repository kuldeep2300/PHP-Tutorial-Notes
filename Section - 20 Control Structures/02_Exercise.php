<?php

function findOddNumber($max): array // If we don't write array return type, still it is going to work.
{
    $returnArray = [];
    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 !== 0) {
            $returnArray[] = $i;
        }
    }
    return $returnArray;
}

$oddNumbers = findOddNumber(10);
echo "<pre>";
print_r($oddNumbers);
echo "</pre>";
