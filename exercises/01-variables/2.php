<?php
//Dump the same values that should display both data type & its value. (Note, usage of var_dump)

$integer = 10;
$float = number_format(10.10, 2);
$string = "hello world";

var_dump($integer);
var_dump($float);
var_dump($string);