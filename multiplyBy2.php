<?php

function multiplyBy2 (&$fArg, &$sArg)
{
    $fArg *= 2;
    $sArg *= 2;
}

$fArg = readline();
$sArg = readline();
multiplyBy2($fArg, $sArg);
print_r("{$fArg} {$sArg}");