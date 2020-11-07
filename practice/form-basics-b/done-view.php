<!doctype html>
<html lang='en'>

<head>
    <title>Mystery Word Scramble</title>
    <meta charset='utf-8'>
    <style>
        .correct {
            color: green;
        }

        .incorrect {
            color: red;
        }
    </style>
</head>

<body>

    <h1>Mystery Word Results</h1>

    <?php if ($haveAnswer == false) { ?>
    There is no answer from you
    <?php } else { ?>

    <?php if ($correct) { ?>
    <div class='correct'>You've got it correct!</div>
    <?php } else { ?>
    <div class='incorrect'>Sorry, You've got it wrong!</div>
    <?php } ?>
    <?php } ?>


    <a href='form-basics.php'>Play again...</a>

</body>

</html>