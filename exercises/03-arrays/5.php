<?php

//Program should display concatenated value of - John & Jane Doe`s
$persons = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];
echo $persons[0][0]["name"] . " " . $persons[0][0]["surname"] . " " . $persons[0][0]["age"] . " & "
    . $persons[0][1]["name"] . " " . $persons[0][1]["surname"] . " " . $persons[0][1]["age"];
