<?php

function convertText($text) 
{
    $letter = strtolower($text[0]) === $text[0];
    return $letter === true ? strrev($text) : $text;
}

print convertText('hello');