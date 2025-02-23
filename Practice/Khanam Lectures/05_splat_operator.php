<?php

function sum(...$numbers) { // splat operator same like spread operator
    return array_sum($numbers);
}

echo sum(1, 2, 3, 4);

