<?php

//Write a console program in a class named FizzBuzz that prompts the user for an integer, then prints
// all of the numbers from one to that integer, separated by spaces.
//Use a loop to print the numbers.
//But for multiples of three, print "Fizz" instead of the number, and for the multiples
// of five print "Buzz".
//For numbers which are multiples of both three and five print "FizzBuzz".
//    Drop to a new line after print each 20 numbers. If the user typed 100, the output would be:
$number = (int)(readline("enter your number here: "));
function fizzBuzz($number)
{
    if ($number % 15 === 0) {
        echo "FizzBuzz" . " ";
    } else if ($number % 3 === 0) {
        echo "Fizz" . " ";
    } else if ($number % 5 === 0) {
        echo "Buzz" . " ";
    } else {
        echo $number . " ";
    }
}
for ($i = 1; $i <= $number; $i++) {
    if ($i % 20 === 0) {
        fizzBuzz($i);
        echo PHP_EOL;
    } else fizzBuzz($i);
}