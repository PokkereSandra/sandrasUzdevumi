<?php

//echo "Input number of terms: ";
//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function
$number = (int)(readline("enter your number: "));
$multiplier = (int)readline("times to multiply: ");
$x[]=[];
while($multiplier>0) {
    $x[] = $number;
    $multiplier--;
}
echo array_product($x);

