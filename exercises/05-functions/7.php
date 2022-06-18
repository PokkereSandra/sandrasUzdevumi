<?php
//Imagine you own a gun store. Only certain guns can be purchased with license types. Create an object
// (person) that will be the requester to purchase a gun (object) Person object has a name, valid
// licenses (multiple) & cash. Guns are objects stored within an array. Each gun has license letter,
// price & name. Using PHP in-built functions determine if the requester (person) can buy a gun from
// the store.
$person = new stdClass();
$person->name = "Garen";
$person->validLicense = ["A", "B"];
$person->cash = 2000;

$firstGun = new stdClass();
$firstGun->name = "B.F.Sword";
$firstGun->license = "A";
$firstGun->price = 850;

$secondGun = new stdClass();
$secondGun->name = "Black cleaver";
$secondGun->license = "B";
$secondGun->price = 2100;

$thirdGun = new stdClass();
$thirdGun->name = "Infinity Edge";
$thirdGun->license = "C";
$thirdGun->price = 1900;

$guns = [$firstGun, $secondGun, $thirdGun];

function letMeGetThatGun(array $guns, object $person): void
{
    foreach ($guns as $gun) {
        if ((in_array($gun->license, $person->validLicense)) && ($person->cash >= $gun->price)) {
            echo "You can buy {$gun->name}" . PHP_EOL;
        } else {
            echo "You don't have enough money or gun has different license letter" . PHP_EOL;
        }

    }
}

letMeGetThatGun($guns, $person);



