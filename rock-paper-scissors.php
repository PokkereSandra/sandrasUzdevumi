<?php
$choices = ["rock", "paper", "scissors", "lizard", "spock"];
$player2 = $choices[rand(0, count($choices) - 1)];
$wins = [
    "rock" => ["scissors", "lizard"],
    "paper" => ["rock", "spock"],
    "scissors" => ["paper", "lizard"],
    "lizard" => ["paper", "spock"],
    "spock" => ["rock", "scissors"],
];
echo "rock, paper, scissors, lizard, spock" . PHP_EOL;
$player1 = readline("enter your choice here: ");

echo "Your choice: " . $player1 . PHP_EOL;
echo "Second player's choice: " . $player2 . PHP_EOL;

if ($player1 === $player2) {
    echo "try again";
}
if (in_array($player2, $wins[$player1])) {
    echo "You win" . PHP_EOL;
} else {
    echo "You lose";
}
