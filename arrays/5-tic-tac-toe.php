<?php
$firstPlayer = "X";
$secondPlayer = "O";
$currentPlayer = $firstPlayer;
$board = [
    ["-", "-", "-"],
    ["-", "-", "-"],
    ["-", "-", "-"]
];
function displayBoard(array $board): void
{
    echo "row\column 0    1    2 \n";
    echo "    0     {$board[0][0]}  |  {$board[0][1]} |  {$board[0][2]}  \n";
    echo "         ----+----+----\n";
    echo "    1     {$board[1][0]}  |  {$board[1][1]} |  {$board[1][2]}  \n";
    echo "         ----+----+----\n";
    echo "    2     {$board[2][0]}  |  {$board[2][1]} |  {$board[2][2]}  \n";
}

function hasWon(string $player, array $board): bool
{
    if ($board[0][0] === $player && $board[0][1] === $player && $board[0][2] === $player) {
        return true;
    }
    if ($board[1][0] === $player && $board[1][1] === $player && $board[1][2] === $player) {
        return true;
    }
    if ($board[2][0] === $player && $board[2][1] === $player && $board[2][2] === $player) {
        return true;
    }
    if ($board[0][0] === $player && $board[1][0] === $player && $board[2][0] === $player) {
        return true;
    }
    if ($board[0][1] === $player && $board[1][1] === $player && $board[2][1] === $player) {
        return true;
    }
    if ($board[0][2] === $player && $board[1][2] === $player && $board[2][2] === $player) {
        return true;
    }
    if ($board[0][0] === $player && $board[1][1] === $player && $board[2][2] === $player) {
        return true;
    }
    if ($board[0][2] === $player && $board[1][1] === $player && $board[2][0] === $player) {
        return true;
    }
    return false;
}

displayBoard($board);

$turns = 0;

while ($turns < 10) {

    $x = readline("Enter your row 0-2: ");
    $y = readline("Enter your column 0-2: ");
    $board[$x][$y] = $currentPlayer;
    displayBoard($board);
    if (hasWon($currentPlayer, $board)) {
        echo " Player $currentPlayer has won." . PHP_EOL;
        break;
    }


    $currentPlayer = $currentPlayer === $firstPlayer ? $secondPlayer : $firstPlayer;
    $turns++;

}





