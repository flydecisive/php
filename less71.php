<?php

function isArgumentsForSubstrCorrect($text, $index, $length)
{
    if ($length < 0) {
        return false;
    } elseif ($index < 0) {
        return false;
    } elseif ($index > strlen($text) - 1) {
        return false;
    } elseif ($index + $length >= strlen($text)) {
        return false;
    } else {
        return true;
    }
}

var_dump(isArgumentsForSubstrCorrect('Sansa Stark', 10, 1));