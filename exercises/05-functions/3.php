<?php
//Create a person object with name, surname and age. Create a function that will determine if
// the person has reached 18 years of age. Print out if the person has reached age of 18 or not.

$person = new stdClass();
$person->name = "Sandra";
$person->surname = "Pokkere";
$person->age = 33;
function checkAge(object $person): string
{
    if ($person->age >= 18) {
        return "This person is over 18 years old";
    }
    return "This person is under 18";
}

echo checkAge($person);