<?php

function multiplyNumberFromRange($start, $finish) 
{
    $i = $start;
    $mult = 1;
    while ($i <= $finish) {
        $mult *= $i;
        ++$i;
    }
    
    return $mult;
}

print multiplyNumberFromRange(1,100);