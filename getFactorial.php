<?php

function getFactorial($number)
{
    if ($number == 1) {
        return 1;
    }

    return $number * getFactorial($number - 1);
}

print_r(getFactorial(10));