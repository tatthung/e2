<?php

/*
$moves = ['rock', 'paper', 'scissors']; #Arrar of Strings
# #0=rock, #1=paper, #3=scissors
$strawLengs = [2, 2, 2, 2, 2, 1];

$mixed = ['rock', 1, .04, true];

//echo $moves[0]; #rock
//echo $moves[1]; #rock
//echo $moves[2]; #rock
// echo $moves[3]; #undefined
//var_dump($moves);

$randomNumber = rand(0, 2);

$move = $moves[$randomNumber];

# Associateive Arrays

$penny_value = .01;
$nickel_value = .05;
$dime_value = .10;
$quarter_value = .25;

$coin_values = [
    'penny' => .01,
    'nickel' => .05,
    'dime' => .10,
    'quarter' => .25
];

$coin_counts = [
    'penny' => 100,
    'nickel' => 25,
    'dime' => .100,
    'quarter' => 24
];

$coins = [
    'penny' => [
        'count' => 100,
        'info' => .01
    ],
    'nickel' => [
        'count' => 25,
        'info' => .05
    ],
    'dime' => [
        'count' => 100,
        'info' => .10
    ],
    'quarter' => [
        'count' => 34,
        'info' => .25
    ]
];

foreach ($coins as $coin => $info) {
    $total = $total + ($info['count'] * $info['info']);
}

//var_dump($total);

//var_dump($coin_values['quarter']);

//asort($coin_counts);

//arsort($coin_counts);

//$cards = [1, 2, 3, 4, 5, 6, 7 , 8, 9];
//shuffle($cards);
// var_dump($cards);

//$total = 0;

//Example game code (Define)
$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
shuffle($cards);
$playerCards = array_splice($cards, 0, count($cards) /2);
$computerCards = $cards;
var_dump($playerCards);

//$playerDraw = $playerCards[count($playerCards) - 1];
$playerDraw =array_pop($playerCards);

var_dump($playerCards);
var_dump($playerDraw);
var_dump($computerCards);

var_dump(date('F j Y'));
var_dump(strtolower('AbcDEdfFe'));
var_dump('1' == '1' && '5' > '2');

// Examples of comparisons
$yourScore = [15];
$highScore = [8];
var_dump($yourScore > $highScore);

// Example If statement
$age = 18;

if ($age < 3) {
    $category = 'baby';
} elseif ($age < 18) {
    $category = 'children';
} elseif ($age > 18) {
    $category = 'adult';
} else {
    $category = 'others';
}

var_dump($category);


# Coin flipping game
$coin = ['heads', 'tails'];

# Player's choice
$randomNumber = rand(0, 1);
$player1Choice = $coin[$randomNumber];

# Coin flip
$randomNumber = rand(0, 1);
$flip = $coin[$randomNumber];

if ($player1Choice == $flip) {
    var_dump('Player 1 wins!');
} else {
    var_dump('Player 1 lost!');
}


# Rock-Scissors-Paper game
$moves = ['rock', 'paper', 'scissors'];
$player1Move = $moves[rand(0, 2)];
$player2Move = $moves[rand(0, 2)];

var_dump($player1Move);
var_dump($player2Move);


if ($player1Move == 'rock' and $player2Move == 'paper') {
    var_dump('Player 2 wins');
} elseif ($player1Move == 'rock' and $player2Move == 'scissors') {
    var_dump('Player 1 wins');
} elseif ($player1Move == 'rock' and $player2Move == 'rock') {
    var_dump('Tie');
}





$numbers = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1,];
foreach ($numbers as $key => $number) {
    var_dump($number);
}
*/

#for loop, i = iterator
for ($i = 0; $i <= 4; $i++) {
    var_dump('left over cards is ' . $i);
}

/*
# while loop
$i = 0;
while ($i <= 10) {
    var_dump($i);
    $i = $i + 1;
}
*/
