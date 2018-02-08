<?php
require_once("model/Sponsor.php");

session_start();

if (isset($_SESSION['admin']) && isset($_POST['sponsor']) && isset($_POST['tournament'])
    && isset($_POST['money'])) {
//    $name, $place, $tournament_fk
    Sponsor::insertSponsorForTournament($_POST['sponsor'], $_POST['tournament'], $_POST['money']);
}