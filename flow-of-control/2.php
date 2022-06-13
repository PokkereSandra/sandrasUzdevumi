<?php

//echo "Enter the number.";
//todo print if number is positive or negative

$number = (int)readline("enter your number: ");
if ($number > 0) {
    echo "$number is positive";
} else if ($number === 0) {
    echo "$number is 0";
} else {
    echo "{$number} is negative";
}