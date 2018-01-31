<?php
require_once('templateInit.php');
require_once('resources/src/model/Tournament.php');
require_once('resources/src/model/Award.php');
require_once('resources/src/model/Sponsor.php');

session_start();
$tpl = templateInit::Instance();

if (isset($_SESSION['id']) && isset($_GET['t'])) {
    // Here I can add some content if needed.
    $params = array('tournament' => json_decode(Tournament::getInfoForTournament($_GET['t'])),
        'awards' => json_decode(Award::getAllAwardsForTournament($_GET['t'])),
        'sponsors' => json_decode(Sponsor::getAllSponsorForTournament($_GET['t'])));
    $tpl->render('tournamentInfo', $params);
} else
    $tpl->render('error');


