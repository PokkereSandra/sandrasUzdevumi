<?php
//Write a program that calculates and displays a person's body mass index (BMI). A person's BMI is
//calculated with the following formula: BMI = weight x 703 / height ^ 2. Where weight is measured in
//pounds and height is measured in inches. Display a message indicating whether the person has optimal
//weight, is underweight, or is overweight. A sedentary person's weight is considered optimal if his
//or her BMI is between 18.5 and 25. If the BMI is less than 18.5, the person is considered underweight.
// If the BMI value is greater than 25, the person is considered overweight.
//Your program must accept metric units.
function calculateBmi(float $weight, float $height): float
{

    $weightInPounds = $weight * 2.20462262185;
    $heightInInches = $height * 0.393700787;
    $result = $weightInPounds * 703 / (pow($heightInInches, 2));

    switch ($result) {
        case $result >= 18.5 && $result < 25:
            echo "You are in perfect shape" . PHP_EOL;
            break;
        case $result < 18.5:
            echo "Time to visit your grandma and enjoy eating all day long" . PHP_EOL;
            break;
        case $result >= 25:
            echo "it's time to eat some salad and go to gym" . PHP_EOL;
            break;
    }
    exit();
}

$insertValues = calculateBmi((float)readline("enter Your weight(kg): "), (float)readline("enter Your height(cm): "));

