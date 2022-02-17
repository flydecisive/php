<?php

function getAge($age) {
    return round($age, 0, PHP_ROUND_HALF_DOWN);
}

print_r(getAge(9.1));