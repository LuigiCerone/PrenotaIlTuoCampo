<?php

require_once('model/Team.php');

session_start();

if (isset($_SESSION["id"]) && isset($_SESSION["admin"]) && isset($_POST['tournament'])) {
    echo "" . Team::getAllTeamForTournament($_POST['tournament']);
}