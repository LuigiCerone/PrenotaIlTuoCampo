<?php
require_once('model/Ranking.php');
require_once('model/Match.php');

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['admin'])) {
    if (isset($_POST['match']) && isset($_POST['tournament']) && isset($_POST['firstId']) && isset($_POST['secondId']) && isset($_POST['firstS']) && isset($_POST['secondS'])) {
        // Determine which one team won.

        if ($_POST['firstS'] > $_POST['secondS']) {
            // First team win.
            Ranking::updatePoint($_POST['firstId'], $_POST['tournament'], 3);
        } else if ($_POST['firstS'] < $_POST['secondS']) {
            // Second team win.
            Ranking::updatePoint($_POST['secondId'], $_POST['tournament'], 3);
        } else {
            // Even.
            Ranking::updatePoint($_POST['firstId'], $_POST['tournament'], 1);
            Ranking::updatePoint($_POST['secondId'], $_POST['tournament'], 1);
        }
        Match::updateResult($_POST['firstS'] . "-" . $_POST['secondS'], $_POST['match']);
    }
} else {
    http_response_code(500);
}