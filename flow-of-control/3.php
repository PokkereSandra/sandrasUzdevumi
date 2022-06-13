<?php

//Write a program that reads a positive integer and count the number of digits the number has.
$number = (int)readline("enter your positive integer here: ");
$digits = 0;
if ($number > 0) {
    for ($i = 0; $i < strlen($number); $i++) {
        $numberAsString = strval($number);
        $numberAsString[$i] = $digits++;
    }
    echo "Number is $number" . PHP_EOL;
    echo "Count of digits: $digits" . PHP_EOL;
} else {
    echo "enter valid integer";
}


