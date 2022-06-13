<?php

//Write a program which prints “Sunday”, “Monday”, ... “Saturday” if the
// int variable "dayNumber" is 0, 1, ..., 6, respectively. Otherwise, it shall print "Not a valid day".
//Use:
//a "nested-if" statement
//a "switch-case-default" statement.
$days = [
    0 => "Monday",
    1 => "Tuesday",
    2 => "Wednesday",
    3 => "Thursday",
    4 => "Friday",
    5 => "Saturday",
    6 => "Sunday",
];
echo implode(",", $days) . PHP_EOL;
$dayNumber = [0, 1, 2, 3, 4, 5, 6];
$inputNumber = (int)readline("enter your number(0-6): ");

// ar if->
//if (in_array($inputNumber, $dayNumber)) {
//    if (key_exists($inputNumber, $days)) {
//        echo "it's a $days[$inputNumber]";
//    }
//} else echo "not a valid day";
//ar switch ->
switch ($inputNumber) {
    case 0:
    case key_exists($inputNumber, $days):
        echo "it's a $days[$inputNumber]";
        break;
    default:
        echo "not a valid day";
}