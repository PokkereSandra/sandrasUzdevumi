<?php
//Modify the example program to compute the position of an object after falling for 10 seconds,
// outputting the position in meters. The formula in Math notation is:
//Gravity formula
//Note: The correct value is -490.5m.
function position(float $accel, float $time, float $velocity, float $initPos): float
{
    return 0.5 * $accel * pow(10, 2) + $velocity * $time + $initPos;
}

var_dump(position((-9.81), 10, 0, 0));