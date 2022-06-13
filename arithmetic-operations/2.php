<?php
//Write a program called CheckOddEven which prints "Odd Number" if the int variable “number” is odd,
// or “Even Number” otherwise. The program shall always print “bye!” before exiting.

function checkOddEven(int $number): string
{
    if ($number % 2 === 0) {
        echo "Even Number" . PHP_EOL;
    } else echo "Odd Number" . PHP_EOL;
    exit("bye!");
}

$giveMeNumber = checkOddEven((int)readline("write Your number here: "));




