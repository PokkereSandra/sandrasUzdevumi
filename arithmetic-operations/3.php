<?php
//Write a program to produce the sum of 1, 2, 3, ..., to 100. Store 1 and 100 in variables lower bound
// and upper bound, so that we can change their values easily. Also compute and display the average.
// The output shall look like:
$x = 1;
$y = 100;
$numbers = range($x, $y);

function sum(array $numbers): string
{
    return "The sum of {$numbers[0]} to {$numbers[count($numbers)-1]} is " . array_sum($numbers) . PHP_EOL;
}

function average(array $numbers): string
{
    return "The average is " . array_sum($numbers) / count($numbers);
}

echo sum($numbers);
echo average($numbers);




