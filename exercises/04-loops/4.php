<?php

//Create a non associative array with integers and print out only integers that divides by 3 without
// any left.
$numbers = [3, 30, 32, 41, 90, 99, 100];
for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] % 3 == 0) {
        echo $numbers[$i] . " ";
    }
}
