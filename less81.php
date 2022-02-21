<?php 

function getHexletBirthday($month, $day, $year)
{
    return mktime(0, 0, 0, $day, $month, $year);
}

print getHexletBirthday(1, 1, 2012);