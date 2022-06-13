<?php
//Design a Geometry class with the following methods:
//A static method that accepts the radius of a circle and returns the area of the circle.
// Use the following formula:Area = π * r * 2
//Use Math.PI for π and r for the radius of the circle
//A static method that accepts the length and width of a rectangle and returns the area of the rectangle.
// Use the following formula: Area = Length x Width
//A static method that accepts the length of a triangle’s base and the triangle’s height. The method
// should return the area of the triangle. Use the following formula:Area = Base x Height x 0.5
//The methods should display an error message if negative values are used for the circle’s radius, the
// rectangle’s length or width, or the triangle’s base or height.
//Next write a program to test the class, which displays the following menu and responds to the user’s
// selection:
//Geometry calculator:
//Calculate the Area of a Circle
//Calculate the Area of a Rectangle
//Calculate the Area of a Triangle
//Quit
//Enter your choice (1-4):
//Display an error message if the user enters a number outside the range of 1 through 4 when selecting
// an item from the menu.
class Geometry
{
    static function areaCircle(float $r)
    {
        if ($r <= 0) {
            exit("invalid value");
        }
        $π = pi();
        echo "Area is " . round(($π * $r * 2), 2);
    }

    static function areaRectangle(float $length, float $width)
    {
        if ($length <= 0 || $width <= 0) {
            exit("invalid value");
        }
        echo "Area is " . $length * $width;
    }

    static function areaTriangle(float $base, float $height)
    {
        if ($base <= 0 || $height <= 0) {
            exit("invalid value");
        }
        echo "Area is " . $base * $height * 0.5;
    }
}

$readLineChoice = (int)readline("1. Calculate the Area of a Circle 
2. Calculate the Area of a Rectangle
3. Calculate the Area of a Triangle
4. Quit
Enter your choice (1-4):");

switch ($readLineChoice) {
    case $readLineChoice === 1:
        Geometry::areaCircle((int)readline("enter radius here: "));
        break;
    case $readLineChoice === 2:
        Geometry::areaRectangle(((int)readline("enter length here: ")),
            ((int)readline("enter width here: ")));
        break;
    case $readLineChoice === 3:
        Geometry::areaTriangle(((int)readline("enter base value here: ")),
            ((int)readline("enter height here: ")));
        break;
    case $readLineChoice === 4:
        $readLineQuit = (int)readline(exit("Nothing to calculate"));
    default:
        echo "is it number between 1 and 4???";

}
