<?php 

function hasChar($text, $char)
{
    $i = 0;
    while ($i <= strlen($text) - 1) {
        if ($text[$i] === $char) {
            return true;
        }

        $i += 1;
    }

    return false;
}

var_dump(hasChar('Renly', 'r'));