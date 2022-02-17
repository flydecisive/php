<?php

function getMax(float $fNum, float $sNum, float $tNum)
{
    if ($fNum >= $sNum && $fNum >= $tNum) {
        if ($sNum >= $tNum) {
            $result = "{$fNum} {$sNum} {$tNum}";
        } else {
           $result = "{$fNum} {$sNum} {$tNum}";
        }
    } elseif ($sNum >= $fNum && $sNum >= $tNum) {
        if ($tNum >= $fNum) {
            $result = "{$sNum} {$tNum} {$fNum}";    
        } else {
            $result = "{$sNum} {$fNum} {$tNum}";
        }
    } else {
        if ($fNum >= $sNum) {
            $result = "{$tNum} {$fNum} {$sNum}";
        } else {
            $result = "{$tNum} {$sNum} {$fNum}";
        }
    }
    return $result;
}

print_r(getMax(2.2, 2.1, 3.1));

function getMax2 (float $fNum, float $sNum, float $tNum) {
    return max($fNum, $sNum, $tNum);
}

print_r(getMax2(2.2, 2.1, 3.1));