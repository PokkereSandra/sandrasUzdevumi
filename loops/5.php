<?php
//
//Write a console program in a class named Piglet that implements a simple 1-player dice game called
//"Piglet" (based on the game "Pig"). The player's goal is to accumulate as many points as possible
//without rolling a 1. Each turn, the player rolls the die; if they roll a 1, the game ends
//and they get a score of 0. Otherwise, they add this number to their running total score.
//The player then chooses whether to roll again, or end the game with their current point total.
//Here is an example dialogue where the user plays until rolling a 1, which ends the game with 0 points:

$dice = null;
$points = [];
$choice = "";
echo "Welcome to Piglet!" . PHP_EOL;
while($dice !== 1){
    $dice = rand(1,6);
    echo "You rolled a " . $dice . "!" . PHP_EOL;
    if($dice === 1){
        exit("You got 0 points");
    }
    echo "Roll again? ";
    $choice = readline("enter your choice (y/n): ");
    if ($choice === "y"){
        $points[] = $dice;
    }
    else if($choice=== "n"){
        $points[] = $dice;
        echo "You got " . array_sum($points) . " points.";
        exit();
        }


}


