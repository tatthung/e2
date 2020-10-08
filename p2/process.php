<?php 

session_start(); #start session

$moves = ['rock', 'scissors', 'paper']; # Build an array to introduce Rock, Scissors and Paper
$diceMoves = ['1', '2', '3', '4', '5', '6']; # Build an array to introduce a dice with 6 faces

# Round 1: Randomly set Player A and B's move - either rock, scissors or paper
$playerA = $moves[rand(0, 2)];
$playerB = $_GET['playerB'];

$playerBSecondHand = $diceMoves[rand(0, 5)];
$playerASecondHand = $diceMoves[rand(0, 5)];

# Round 1: Rock beats Scissors, Scissors beats Paper, Paper beats Rock.
if ($playerA == $playerB) { # if there is a tie in Round 1
    $winner = 'Tie';
} elseif ($playerA == $moves[0] and $playerB == $moves[1]) {
    $winner = 'Player A';
} elseif ($playerA == $moves[1] and $playerB == $moves[2]) {
    $winner = 'Player A';
} elseif ($playerA == $moves[2] and $playerB == $moves[0]) {
    $winner = 'Player A';
} else {
    $winner = 'Player B';
}

# In the case scenario where Tie happens (above scenario), both players will get a  chance to roll a dice to determine the fnal winner
if ($playerBSecondHand == $playerASecondHand) {
    # if there is a tie in the dice game
    $winnerTwo = 'Another Tie';
} elseif ($playerBSecondHand > $playerASecondHand) {
    $winnerTwo = 'You Won';
} elseif ($playerBSecondHand < $playerASecondHand) {
    $winnerTwo = 'Computer Won';
}
echo $winnerTwo;

$_SESSION['results'] = [
    'playerA' => $playerA,
    'playerB' => $playerB,
    'winner' => $winner,
];

$_SESSION['resultsTwo'] = [
    'playerASecondHand' => $playerASecondHand,
    'playerBSecondHand' => $playerBSecondHand,
    'winnerTwo' => $winnerTwo,
];

header('Location: index.php');
