<?php
//Write a program called coza-loza-woza.php which prints the numbers 1 to 110, 11 numbers per line.
// The program shall print "Coza" in place of the numbers which are multiples of 3, "Loza" for multiples
// of 5, "Woza" for multiples of 7, "CozaLoza" for multiples of 3 and 5, and so on.
// The output shall look like
$numbers = range(1, 110);
for ($i = 0; $i < count($numbers); $i++) {
    switch ($numbers[$i]) {
        case $numbers[$i] % 3 === 0 && $numbers[$i] % 5 === 0 && $numbers[$i] % 7 === 0 && $numbers[$i] % 11 === 0:
            echo "CozaLozaWoza" . PHP_EOL;
            break;
        case $numbers[$i] % 3 === 0 && $numbers[$i] % 5 === 0 && $numbers[$i] % 7 === 0:
            echo "CozaLozaWoza" . " ";
            break;
        case $numbers[$i] % 5 === 0 && $numbers[$i] % 7 === 0 && $numbers[$i] % 11 === 0:
            echo "LozaWoza" . PHP_EOL;
            break;
        case $numbers[$i] % 5 === 0 && $numbers[$i] % 7 === 0:
            echo "LozaWoza" . " ";
            break;
        case $numbers[$i] % 3 === 0 && $numbers[$i] % 7 === 0 && $numbers[$i] % 11 === 0:
            echo "CozaWoza" . PHP_EOL;
            break;
        case $numbers[$i] % 3 === 0 && $numbers[$i] % 7 === 0:
            echo "CozaWoza" . " ";
            break;
        case $numbers[$i] % 3 === 0 && $numbers[$i] % 5 === 0 && $numbers[$i] % 11 === 0:
            echo "CozaLoza" . PHP_EOL;
            break;
        case $numbers[$i] % 3 === 0 && $numbers[$i] % 5 === 0:
            echo "CozaLoza" . " ";
            break;
        case $numbers[$i] % 3 === 0 && $numbers[$i] % 11 === 0:
            echo "Coza" . PHP_EOL;
            break;
        case $numbers[$i] % 3 === 0:
            echo "Coza" . " ";
            break;
        case $numbers[$i] % 5 === 0 && $numbers[$i] % 11 === 0:
            echo "Loza" . PHP_EOL;
            break;
        case $numbers[$i] % 5 === 0:
            echo "Loza" . " ";
            break;
        case $numbers[$i] % 7 === 0 && $numbers[$i] % 11 === 0:
            echo "Woza" . PHP_EOL;
            break;
        case $numbers[$i] % 7 === 0:
            echo "Woza" . " ";
            break;
        case $numbers[$i] % 11 === 0:
            echo $numbers[$i] . PHP_EOL;
            break;
        default:
            echo $numbers[$i] . " ";

    }

}