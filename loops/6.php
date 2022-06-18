<?php

//Write a console program in a class named AsciiFigure that draws a figure of the following form,
//using for loops.

//////////////////\\\\\\\\\\\\\\\\
//////////////********\\\\\\\\\\\\
//////////****************\\\\\\\\
//////************************\\\\
//********************************
$leftSide = "/";
$middle = "*";
$rightSide = "\\";
$rows = 5;
$columns= 32;

for($i = 0; $i<$rows; $i++) {
echo str_repeat($leftSide,$columns/2-$i*4);
echo str_repeat($middle,$i*8);
echo str_repeat($rightSide,$columns/2-$i*4);

echo PHP_EOL;
;}


