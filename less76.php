<?php

function invertCase($text)
{
    $newText = '';
    for($i = 0; $i <= strlen($text); $i += 1) {
        if ($i === strlen($text) - 1) {
            $char = substr($text, -1);
        } else {
            $char = substr($text, $i, 1);
        }
        if ($char === strtoupper($char)) {
            $char = strtolower($char);
        } else {
            $char = strtoupper($char);
        }
        $newText .= $char;
    }

    return $newText;
}

print invertCase('ThRee');