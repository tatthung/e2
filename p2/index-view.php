<!doctype html>
<html lang='en'>

<head>
    <title>Project 2</title>
    <meta charset='utf-8'>
    <link href=data;, rel=icon>
</head>

<form method='GET' action='process.php'>

    <body>

        <h1><u>Project 2</u></h1>
        <h2>Advance Rock-Scissors-Paper Game</h2>
        <h2>Mechanics</h2>
        <ul>
            <li>Computer and Human Player (You) will compete with each other, either with Rock,
                Paper or Scissors.</li>
            <li>A tie is declared if both players throw the same move.</li>
            <li>Otherwise: Rock beats Scissors, Scissors beats Paper, Paper beats Rock.</li>
            <li>In the case of a tie, both players need to throw a dice to win the game</li>
            <li>Since a dice has 6 faces, the player with the highest value will dominate the game</li>
        </ul>

        <h2>Game Play</h2>
        <ul>
            <div">
                <fieldset style="background:#ededed;border:0;">
                    Please select your move
                    <input type='radio' name='playerB' id='rock' value='rock' checked="checked"><label
                        for='rock'>Rock</label>
                    <input type='radio' name='playerB' id='scissors' value='scissors'><label
                        for='scissors'>Scissors</label>
                    <input type='radio' name='playerB' id='paper' value='paper'><label for='paper'>Paper</label>
                    <button name='Submit1' type='submit' value='winner'>Throw a Move</button><br>
                    <?php if ($haveResults) { ?>
                    <hr>
                    <h2>
                        Results
                    </h2>
                    Computer threw <i style="color:blue;"><?php echo $playerA; ?></i><br>
                    You threw <i style="color:blue;"><?php echo $playerB; ?></i></br><br>
                    The winner for this round is <b><i style="color:green;"><?php echo $winner; ?></i></b>
                    </br>
                    </div>
        </ul>

        <?php } ?>
        <ul>
            <?php if ($winner == 'Tie') { ?>
            <?php if ($haveResultsTwo) { ?>
            <fieldset style=" border-color: black;background:#ffffe0;">
                <legend>
                    <h2 style="background:white;">Results of Dice Rolling </h2>
                </legend>
                Computer rolled the dice with the value <i style="color:blue;"><?php echo $playerASecondHand; ?></i><br>
                You rolled the dice with the value of <i style="color:blue;"><?php echo $playerBSecondHand; ?></i><br>
                The results of this round is: <i style="color:green;"><b><?php echo $winnerTwo; ?></b></i>
                </i></b>
                <br>
            </fieldset>
            <?php } ?>
        </ul>
        <?php } ?>

    </body>

</html>