<?php
//Write a program to play a word-guessing game like Hangman.
//It must randomly choose a word from a list of words.
//It must stop when all the letters are guessed.
//It must give them limited tries and stop after they run out.
//It must display letters they have already guessed (either only the incorrect guesses or all guesses).

$words = ["homework", "brother", "banana", "bathroom", "computer", "coconut"];
$randomWord = $words[rand(0, count($words) - 1)];
$randomWordAsArray = str_split($randomWord);
$gameArray = preg_replace("/\S/", "$1-", $randomWordAsArray);

$attempts = 0;
$maxAttempts = count($gameArray);
$misses = "";
echo "Guess this word!" . PHP_EOL;
echo implode($gameArray) . PHP_EOL;
while ($attempts < $maxAttempts) {

    $letter = readline("write your letter here:");

    for ($i = 0; $i < count($randomWordAsArray); $i++) {

        if ($letter === $randomWordAsArray[$i]) {
            $gameArray[$i] = $randomWordAsArray[$i];
        }
    }
    if (!(in_array($letter, $gameArray))) {
        $misses .= $letter;
    }
    if (!(in_array("-", $gameArray))) {
        exit("You won!");
    }
    echo "Word: " . implode("", $gameArray) . PHP_EOL;
    echo "Misses: " . $misses . PHP_EOL;
    echo "Your guess: " . $letter . PHP_EOL;

    $attempts++;

}
echo "Sorry, You didn't guess this word in $maxAttempts attempts";
