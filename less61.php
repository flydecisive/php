<?php

function whoIsThisHouseToStarks($family)
{
    switch ($family) {
        case "Karstark":
        case "Tully":
            return 'friend';
        case "Lannister":
        case "Frey":
            return 'enemy';
        default:
            return 'neutral';
    }
}
