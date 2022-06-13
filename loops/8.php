<?php
//Write a console program in a class named NumberSquare that prompts the user for two integers,
// a min and a max, and prints the numbers in the range from min to max inclusive in a square pattern.
// Each line of the square consists of a wrapping sequence of integers increasing from min and max.
// The first line begins with min, the second line begins with min + 1, and so on.
// When the sequence in any line reaches max, it wraps around back to min.
// You may assume that min is less than or equal to max. Here is an example dialogue:
$valueMin = (int)(readline("enter your min value here: "));
$valueMax = (int)(readline("enter your max value here: "));
$allNumbersInRange = range($valueMin, $valueMax);

for ($i = 0; $i < count($allNumbersInRange); $i++) {
    echo implode($allNumbersInRange) . PHP_EOL;
    $allNumbersInRange[] = array_shift($allNumbersInRange);
}



