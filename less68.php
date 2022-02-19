<?php

function printReversedNameBySymbol($text)
{
    $i = -1;
    while ($i >= -strlen($text)) {
        print "{$text[$i]}\n";
        --$i;
    }
}

printReversedNameBySymbol("asdf");