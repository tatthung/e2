<?php

session_start();

$results = '';
$correct = null;
$haveAnswer = true;

if ($_GET['answer'] == '') {
    $haveAnswer = false;
} elseif ($_GET['answer'] == 'pumpkin') {
    $correct = true;
} else {
    $correct = false;
}

$_SESSION['results'] = [
    'haveAnswer' => $haveAnswer,
    'correct' => $correct
];

# redirect the user to done.php
header('Location: done.php');
