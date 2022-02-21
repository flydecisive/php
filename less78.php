<?php 

function startsWith($text, $str) 
{   
    if (strpos($text, $str) == false) {
        return true;
    }

    return false;
}

var_dump(startsWith('One', 'n'));