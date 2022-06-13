<?php
//Foo Corporation needs a program to calculate how much to pay their hourly employees. The US Department
// of Labor requires that employees get paid time and a half for any hours over 40 that they work in
// a single week. For example, if an employee works 45 hours, they get 5 hours of overtime, at 1.5 times
// their base pay. The State of Massachusetts requires that hourly employees be paid at least $8.00
// an hour. Foo Corp requires that an employee not work more than 60 hours in a week. Summary
//An employee gets paid (hours worked) × (base pay), for each hour up to 40 hours.
//For every hour over 40, they get overtime = (base pay) × 1.5.
//The base pay must not be less than the minimum wage ($8.00 an hour). If it is, print an error.
//If the number of hours is greater than 60, print an error message.
//Write a method that takes the base pay and hours worked as parameters, and prints the total pay or an
// error. Write a main method that calls this method for each of these employees:

$employees = [
    [
        "name" => "employeeFirst",
        "basePay" => 7.50,
        "hours" => 35
    ],
    [
        "name" => "employeeSecond",
        "basePay" => 8.20,
        "hours" => 47
    ],
    [
        "name" => "employeeThird",
        "basePay" => 10.00,
        "hours" => 73
    ]
];
function wagePerWeek(array $employees)
{
    foreach ($employees as $employee) {

        if ($employee["basePay"] < 8.00) {
            echo "go to your boss and ask to increase Your basepay" . PHP_EOL;
        } else if ($employee["hours"] > 60) {
            echo "Dude, You work too much" . PHP_EOL;
        } else if (($employee["hours"] - 40) > 0) {
            echo 40 * $employee["basePay"] +
                ($employee["hours"] - 40) * $employee["basePay"] * 1.5 . PHP_EOL;
        } else echo $employee["basePay"] * $employee["hours"] . PHP_EOL;
    }
}

wagePerWeek($employees);



