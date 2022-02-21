<?php

$timestamp = time();

function getYear($timestamp) 
{
    return 1970 + (int) floor($timestamp / (60 * 60 * 24 * 365));
}

print getYear($timestamp);