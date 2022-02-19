<?php

function joinNumbersFromRange($start, $finish) {
    $i = $start;
    $result = '';
    while ($i <= $finish) {
        $result .= $i;
        ++$i;
    }

    return $result;
}

print joinNumbersFromRange(1,500);