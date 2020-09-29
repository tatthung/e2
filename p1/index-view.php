<!doctype html>
<html lang='en'>

<head>
    <title>Project 1</title>
    <meta charset='utf-8'>
</head>

<body>
    <h1>Project 1</h1>
    <h2>Advance Rock-Scissors-Paper Game</h2>
    <h2>Mechanics</h2>
    <ul>
        <li>Player A and Player B randomly “throw” either Rock, Paper or Scissors.</li>
        <li>A tie is declared if both players throw the same move.</li>
        <li>Otherwise: Rock beats Scissors, Scissors beats Paper, Paper beats Rock.</li>
        <li>In the case of a tie, both the players need to war each other for the second attempt with their second hand
        </li>
        <li>The same rule applies: Rock beats Scissors, Scissors beats Paper, Paper beats Rock.</li>

    </ul>

    <h2>Results</h2>
    <ul>
        <li>Player A threw <?php echo $playerA; ?>
        </li>
        <li>Player B threw <?php echo $playerB; ?>
        </li>
        <li>The winner for this round is <?php echo $winner; ?>
        </li>

        <div style="color:blue;">
            <?php if ($winner == 'Tie') { // When there is a tie
    echo("As a second attempt, Player A threw ". $playerASecondHand) . "<br>"; // Randomly assign a move for Player A
    echo("As a second attempt, Player B threw ". $playerBSecondHand) . "<br>"; // Randomly assign a move for Player B
    echo("The overall winner is ". $winnerTwo) . "<br>"; // Publish the winning results, and if its another tie, all these values will not be shown
} else {
    $playerASecondHand = null;
    $playerBSecondHand = null;
    $winnerTwo = null;
} ?>
        </div>

</body>

</html>
