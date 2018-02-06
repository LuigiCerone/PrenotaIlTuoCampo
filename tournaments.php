<?php
ini_set("display_errors", 0);
require_once('templateInit.php');
require_once('resources/src/model/Tournament.php');

session_start();
$tpl = templateInit::Instance();

if (isset($_SESSION['id'])) {
    $params = array('tournaments' => json_decode(Tournament::getAllTournamentsAvailableForUser($_SESSION['id'])));
} else
    $params = array('tournaments' => json_decode(Tournament::getAllTournaments()));

$tpl->render('tournaments', $params);
