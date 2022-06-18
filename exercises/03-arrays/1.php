<?php
//Array or object is a container that contains multiple sets of values.
//Definition of an array
//$items = []; // Since 5.6 version
//$list = array(); // old way
//Exercise 1
//Create a non-associative array with 3 integer values and display the total sum of them.

$numbers = [10, 20, 30];
echo array_sum($numbers);