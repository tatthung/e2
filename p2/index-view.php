<!doctype html>
<html lang='en'>

<head>
    <title>Project 2</title>
    <meta charset='utf-8'>
    <link href=data;, rel=icon>
</head>

<form method='GET' action='process.php'>

    <body>
        <h1>Project 2</h1>
        <h2>Advance Rock-Scissors-Paper Game</h2>
        <h2>Mechanics</h2>
        <ul>
            <li>Player A and Player B randomly “throw” either Rock, Paper or Scissors.</li>
            <li>A tie is declared if both players throw the same move.</li>
            <li>Otherwise: Rock beats Scissors, Scissors beats Paper, Paper beats Rock.</li>
            <li>In the case of a tie, both the players need to war each other for the second attempt with their second
                hand
            </li>
            <li>The same rule applies: Rock beats Scissors, Scissors beats Paper, Paper beats Rock.</li>

        </ul>

        <h2>Game Play</h2>
        <ul>
            Please select your move
            <input type='radio' name='playerB' id='rock' value='rock' checked="checked"><label for='rock'>Rock</label>
            <input type='radio' name='playerB' id='scissors' value='scissors'><label for='scissors'>Scissors</label>
            <input type='radio' name='playerB' id='paper' value='paper'><label for='paper'>Paper</label>
            <button name='Submit1' type='submit' value='winner'>Throw a Move</button><br><br>
            <?php if ($haveResults) { ?>
            <fieldset>
                <legend>
                    <h2>

                        Results
                    </h2>
                </legend>
                Computer threw <?php echo $playerA; ?><br>
                You threw <?php echo $playerB; ?><br>
                The winner for this round is <b><?php echo $winner; ?></b><br>
            </fieldset>
        </ul>
        <?php } ?>


        <?php if ($winner == 'Tie') { ?>
        <ul>
            Please select your move
            <input type='radio' name='playerBSecondHand' id='rock' value='rock' checked="checked"><label
                for='rock'>Rock</label>
            <input type='radio' name='playerBSecondHand' id='scissors' value='scissors'><label
                for='scissors'>Scissors</label>
            <input type='radio' name='playerBSecondHand' id='paper' value='paper'><label for='paper'>Paper</label>
            <button name='Submit2' type='submit' value='winnerTwo'>Throw a Move</button><br><br>
            }
            <?php if ($haveResultsTwo) { ?>
            <fieldset>
                <legend>
                    <h2>

                        Results
                    </h2>
                </legend>
                Computer threw <?php echo $playerASecondHand; ?><br>
                You threw <?php echo $playerBSecondHand; ?><br>
                The winner for this round is <b><?php echo $winnerTwo; ?></b><br>
            </fieldset>
            } <?php } ?>
        </ul>
        <?php } ?>

    </body>

</html>
