<?php
ini_set("display_errors", 0);

require_once('templateInit.php');
require_once('resources/src/model/Tournament.php');
require_once('resources/src/model/Match.php');

session_start();
$tpl = templateInit::Instance();

if (isset($_SESSION['admin']) && isset($_GET['t'])) {
// Here I can add some content if needed.
    $params = array('tournaments' => json_decode(Tournament::getInfoForTournament($_GET['t'])));

    $tpl->render('adminMatches', $params);
} else
    $tpl->render('error');
