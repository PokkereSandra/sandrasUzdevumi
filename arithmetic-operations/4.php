<?php
//Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int.
// Take note that it is the same as factorial of N.
$number = 6;
$factorialOfNumber = 1;
for ($i = $number; $i >= 1; $i--) {
    $factorialOfNumber = $factorialOfNumber * $i;
}
echo "Factorial number of $number is $factorialOfNumber";