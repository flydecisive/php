<?php

$timestamp = time();

function getCustomDate($timestamp)
{
    return date('d/m/Y', $timestamp);
}

print getCustomDate($timestamp);