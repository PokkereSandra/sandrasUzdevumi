<?php

//Write a console program in a class named AsciiFigure that draws a figure of the following form,
//using for loops.

//////////////////\\\\\\\\\\\\\\\\
//////////////********\\\\\\\\\\\\
//////////****************\\\\\\\\
//////************************\\\\
//********************************

$rows = 3;
for($i = 0; $i<$rows; $i++) {
echo str_repeat("////",$i+2);
echo str_repeat("****",$i);
echo str_repeat("****",$i);
echo str_repeat("xxxx",$i+2);

echo PHP_EOL;
;}


