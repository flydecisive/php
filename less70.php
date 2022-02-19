<?php

function mysubstr($text, $length)
{
    $i = 0;
    $result = '';
    while ($i <= $length - 1) {
        $result .= $text[$i];
        ++$i;
    }

    return $result;
}