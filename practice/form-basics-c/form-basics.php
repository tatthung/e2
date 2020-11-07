<?php

// Handle session data
session_start();

// Extract data from the session *if* the session has the results
// Otherwise, assume we've just landed on the page fresh (eg. the form has not been)
if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    extract($results);
} else {
    $results = false;
}

// Reset the game data so we can start fresh the next time the page is loaded
$_SESSION['results'] = null;

require 'form-basics-c-view.php';
