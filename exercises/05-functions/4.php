<?php

//Create a array of objects that uses the function of exercise 3 but in loop printing
// out if the person has reached age of 18.

$mother = new stdClass();
$mother->name = "Sandra";
$mother->surname = "Pokkere";
$mother->age = 33;

$father = new stdClass();
$father->name = "Kārlis";
$father->surname = "Pokkers";
$father->age = 35;

$daughter = new stdClass();
$daughter->name = "Elza";
$daughter->surname = "Pokkere";
$daughter->age = 6;

$son = new stdClass();
$son->name = "Jānis";
$son->surname = "Pokkers";
$son->age = 11;

$persons = [$mother, $father, $daughter, $son];
function checkAge(array $persons): void
{
    foreach ($persons as $person) {
        if ($person->age >= 18) {
            echo "over 18" . PHP_EOL;
        } else echo "underage" . PHP_EOL;

    }

}

echo checkAge($persons);


