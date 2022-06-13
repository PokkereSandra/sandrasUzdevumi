<?php
//Write a program to accept two integers and return true if the either one is 15
// or if their sum or difference is 15.
function getFifteen(int $a, int $b): bool
{
    if ($a === 15 || $b === 15 || $a + $b === 15 || $a - $b === 15 || $b - $a === 15) {
        return true;
    }
    return false;
}

var_dump(getFifteen(10, 5));
var_dump(getFifteen(2, 6));
var_dump(getFifteen(50, 35));
var_dump(getFifteen(15, 12));