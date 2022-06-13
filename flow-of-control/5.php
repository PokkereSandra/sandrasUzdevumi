<?php
//On your phone keypad, the alphabets are mapped to digits as follows: ABC(2),
// DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).
//
//Write a program called PhoneKeyPad, which prompts user for a String (case insensitive),
// and converts to a sequence of keypad digits.
//
//Use:
//
//a "nested-if" statement
//a "switch-case-default" statement
//Hint: In switch-case, you can handle multiple cases by omitting the break statement, e.g.,
$letters = [
    "2" => ["a", "b", "c"],
    "3" => ["d", "e", "f"],
    "4" => ["g", "h", "i"],
    "5" => ["j", "k", "l"],
    "6" => ["m", "n", "o"],
    "7" => ["p", "q", "r", "s"],
    "8" => ["t", "u", "v"],
    "9" => ["w", "x", "y", "z"],
];
$word = readline("enter your word here: ");
$wordByLetters = str_split($word);
foreach ($wordByLetters as $oneLetter) {
    foreach ($letters as $number => $letter) {
        if (in_array($oneLetter, $letter)) {
             $indexOfLetter = array_search($oneLetter,$letter);
            echo str_repeat($number,$indexOfLetter+1);
        }
    }
}

