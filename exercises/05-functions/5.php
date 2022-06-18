<?php
//Create a 2D associative array in 2nd dimension with fruits and their weight.
//Create a function that determines if fruit has weight over 10kg. Create a secondary array with
// shipping costs per weight. Meaning that you can say that over 10 kg shipping costs are 2 euros,
// otherwise its 1 euro. Using foreach loop print out the values of the fruits and how much it would
// cost to ship this product.
$fruits = [
    [
        "name" => "lemon",
        "weight" => 10
    ],
    [
        "name" => "apple",
        "weight" => 8
    ]
];
function shippingCost(int $weight): int
{
    if ($weight >= 10) {
        return 2;
    }
    return 1;
}

foreach ($fruits as $fruit) {
    echo $fruit['name'] . " " . $fruit["weight"] . " kg " . shippingCost($fruit["weight"]) . "eur." . PHP_EOL;
}