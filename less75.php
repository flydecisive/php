<?php

function sumOfSerises($start, $finish) 
{
    $sum = 0;
    for($i = $start; $i <= $finish; $i += 1) {
        $sum += $i;
    }
    return $sum;
}

print sumOfSerises(4, 7);