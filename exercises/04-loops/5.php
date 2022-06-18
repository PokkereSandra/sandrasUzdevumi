<?php
//Create an associative array with objects of multiple persons.
//Each person should have a name, surname, age and birthday. Using loop (by your choice)
// print out every persons personal data.
//$persons = [
//    [
//        "name" => "Sandra",
//        "surname" => "Pokkere",
//        "age" => 33,
//        "birthday" => "24.05"
//    ],
//    [
//        "name" => "Elza",
//        "surname" => "Pokkere",
//        "age" => 6,
//        "birthday" => "01.01"
//    ],
//    [
//        "name" => "Jānis",
//        "surname" => "Pokkers",
//        "age" => 11,
//        "birthday" => "24.04"
//    ],
//    [
//        "name" => "Kārlis",
//        "surname" => "Pokkers",
//        "age" => 35,
//        "birthday" => "14.12"
//
//    ]
//
//];
//foreach ($persons as $person) {
//    foreach ($person as $personalData){
//        echo $personalData . " ";
//    }
//    echo "\n";
//}
$mother = new stdClass();
$mother->name = "Sandra";
$mother->surname = "Pokkere";
$mother->age = 33;
$mother->birthday = "24.05";

$father = new stdClass();
$father->name = "Kārlis";
$father->surname = "Pokkers";
$father->age = 35;
$father->birthday = "14.12";

$daughter = new stdClass();
$daughter->name = "Elza";
$daughter->surname = "Pokkere";
$daughter->age = 6;
$daughter->birthday = "01.01";

$son = new stdClass();
$son->name = "Jānis";
$son->surname = "Pokkers";
$son->age = 11;
$son->birthday = "24.04";

$persons = [$mother, $father, $daughter, $son];
foreach ($persons as $person) {
    foreach ($person as $personalData) {
        echo $personalData . " ";
    }
    echo "\n";
}