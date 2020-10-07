<?php 

session_start(); #start session

if (isset($_SESSION['results'])) {
    extract($_SESSION['results']);
    $haveResults = true;
} else {
    $haveResults = false;
}

if (isset($_SESSION['resultsTwo'])) {
    extract($_SESSION['resultsTwo']);
    $haveResultsTwo = true;
} else {
    $haveResultsTwo = false;
}

$_SESSION['results'] = null;
$_SESSION['resultsTwo'] = null;

require 'index-view.php';
