<?php

function printNumbers($firstNumber)
{
    
    $i = $firstNumber;
    while ($i >= 0) {
        if ($i == 0) {
            print "finished!";
        } else {
            print "{$i}\n";
        }
        
        --$i;
    }
    
}

printNumbers(7);