<?php
ini_set("display_errors", 0);

require_once('templateInit.php');
require_once('resources/src/model/Tournament.php');
require_once('resources/src/model/Match.php');

session_start();
$tpl = templateInit::Instance();

if (isset($_SESSION['admin']) && isset($_GET['t'])) {
    $params = array('tournament' => json_decode(Tournament::getInfoForTournament($_GET['t'])),
        'days' => array_chunk(json_decode(Match::getAllMatchesForTournament($_GET['t'])), 5));

    $tpl->render('adminMatches', $params);
} else
    $tpl->render('error');
