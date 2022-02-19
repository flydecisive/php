<?php

function countChars($text, $char) 
{
    $i = 0;
    $count = 0;
    $text = strtolower($text);
    $char = strtolower($char);
    while ($i <= strlen($text) - 1) {
        if ($text[$i] === $char) {
            ++$count;
        }

        ++$i;
    }

    return $count;
}

print countChars('HexlEt', 'E');