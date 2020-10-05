<?php

session_start(); #start session

$playerB = $_GET['playerB'];

$moves = ['rock', 'scissors', 'paper']; # Build an array to introduce Rock, Scissors and Paper

# Randomly set Player A and B's move - either rock, scissors or paper
$playerA = $moves[rand(0, 2)];

$playerBSecondHand = $_GET['playerBSecondHand'];
$playerASecondHand = $moves[rand(0, 2)];


# Rock beats Scissors, Scissors beats Paper, Paper beats Rock.
if ($playerA == $moves[0] and $playerB == $moves[1]) {
    $winner = 'Player A';
} elseif ($playerA == $moves[1] and $playerB == $moves[2]) {
    $winner = 'Player A';
} elseif ($playerA == $moves[2] and $playerB == $moves[0]) {
    $winner = 'Player A';
} else {
    $winner = 'Player B';
}


# In the case scenario where Tie happens
# Both players will get a second chance to throw new moves with their second hand
# Winning the second round refers to winning that overall round
if ($playerA == $moves[0] and $playerB == $moves[0]) {
    $winner = 'Tie';
} elseif ($playerASecondHand == $moves[0] and $playerBSecondHand == $moves[0]) {
    $winnerTwo = 'Tie';
} elseif ($playerASecondHand == $moves[0] and $playerBSecondHand == $moves[1]) {
    $winnerTwo = 'Player A';
} elseif ($playerASecondHand == $moves[1] and $playerBSecondHand == $moves[1]) {
    $winnerTwo = 'Tie';
} elseif ($playerASecondHand == $moves[1] and $playerBSecondHand == $moves[2]) {
    $winnerTwo = 'Player A';
} elseif ($playerASecondHand == $moves[2] and $playerBSecondHand == $moves[0]) {
    $winnerTwo = 'Player A';
} elseif ($playerASecondHand == $moves[2] and $playerBSecondHand == $moves[2]) {
    $winnerTwo = 'Tie';
} else {
    $winnerTwo = 'Player B';
}

# Second Tie scenario
if ($playerA == $moves[1] and $playerB == $moves[1]) {
    $winner = 'Tie';
} elseif ($playerASecondHand == $moves[0] and $playerBSecondHand == $moves[0]) {
    $winnerTwo = 'Tie';
} elseif ($playerASecondHand == $moves[0] and $playerBSecondHand == $moves[1]) {
    $winnerTwo = 'Player A';
} elseif ($playerASecondHand == $moves[1] and $playerBSecondHand == $moves[1]) {
    $winnerTwo = 'Tie';
} elseif ($playerASecondHand == $moves[1] and $playerBSecondHand == $moves[2]) {
    $winnerTwo = 'Player A';
} elseif ($playerASecondHand == $moves[2] and $playerBSecondHand == $moves[0]) {
    $winnerTwo = 'Player A';
} elseif ($playerASecondHand == $moves[2] and $playerBSecondHand == $moves[2]) {
    $winnerTwo = 'Tie';
} else {
    $winnerTwo = 'Player B';
}

# Third Tie scenario
if ($playerA == $moves[2] and $playerB == $moves[2]) {
    $winner = 'Tie';
} elseif ($playerASecondHand == $moves[0] and $playerBSecondHand == $moves[0]) {
    $winnerTwo = 'Tie';
} elseif ($playerASecondHand == $moves[0] and $playerBSecondHand == $moves[1]) {
    $winnerTwo = 'Player A';
} elseif ($playerASecondHand == $moves[1] and $playerBSecondHand == $moves[1]) {
    $winnerTwo = 'Tie';
} elseif ($playerASecondHand == $moves[1] and $playerBSecondHand == $moves[2]) {
    $winnerTwo = 'Player A';
} elseif ($playerASecondHand == $moves[2] and $playerBSecondHand == $moves[0]) {
    $winnerTwo = 'Player A';
} elseif ($playerASecondHand == $moves[2] and $playerBSecondHand == $moves[2]) {
    $winnerTwo = 'Tie';
} else {
    $winnerTwo = 'Player B';
}

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
