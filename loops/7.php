<?php
//Write a console program in a class named RollTwoDice that prompts the user for a desired sum,
// then repeatedly rolls two six-sided dice (using a Random object to generate
// random numbers from 1-6) until the sum of the two dice values is the desired sum.
// Here is the expected dialogue with the user:
$diceOne = null;
$diceTwo = null;
$diceSum = null;
$desiredSum = (int)readline("enter your desired sum: ");
while($diceSum !== $desiredSum) {
    $diceOne = rand(1, 6);
    $diceTwo = rand(1, 6);
    $diceSum = $diceOne + $diceTwo;
    echo $diceOne . " + " . $diceTwo . " = " . $diceSum . PHP_EOL;
}
