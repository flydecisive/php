<?php

function filterString($text, $char)
{
    $newText = '';
    $i = 0;
    while ($i <= strlen($text) - 1) {
        if ($text[$i] !== $char) {
            $newText .= $text[$i];
        }

        $i += 1;
    }

    return $newText;
}

print filterString('If I loo back I am lost', 'I');