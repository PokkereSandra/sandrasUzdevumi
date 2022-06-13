<?php

//echo "Input the 1st number: ";
//echo "Input the 2nd number: ";
//echo "Input the 3rd number: ";
//todo print the largest number

$firstNumber = (int)readline("enter your number: ");
$secondNumber = (int)readline("enter your number: ");
$thirdNumber = (int)readline("enter your number: ");

$largestNumber = max($firstNumber,$secondNumber,$thirdNumber);
echo $largestNumber;
