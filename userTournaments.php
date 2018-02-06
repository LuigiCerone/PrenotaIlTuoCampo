<?php
ini_set("display_errors", 0);
require_once('templateInit.php');
require_once('resources/src/model/Tournament.php');
require_once('resources/src/model/Team.php');

session_start();
$tpl = templateInit::Instance();

if (isset($_SESSION['id'])) {
    $params = array('teams' => json_decode(Team::getAllTeamForUser($_SESSION['id'])));
    $tpl->render('userTournaments', $params);
} else
    $tpl->render('error');
