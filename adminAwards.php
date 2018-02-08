<?php
ini_set("display_errors", 0);

require_once('templateInit.php');
require_once('resources/src/model/Tournament.php');
require_once('resources/src/model/Award.php');

session_start();
$tpl = templateInit::Instance();

if ((isset($_SESSION['admin']) || isset($_SESSION['moderator'])) && isset($_GET['t'])) {
    $params = array('tournament' => json_decode(Tournament::getInfoForTournament($_GET['t'])),
        'awards' => json_decode(Award::getAllAwardsForTournament($_GET['t'])));

    $tpl->render('adminAwards', $params);
} else
    $tpl->render('error');
