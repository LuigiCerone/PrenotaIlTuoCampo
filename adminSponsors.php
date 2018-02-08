<?php
ini_set("display_errors", 0);

require_once('templateInit.php');
require_once('resources/src/model/Tournament.php');
require_once('resources/src/model/Sponsor.php');

session_start();
$tpl = templateInit::Instance();

if (isset($_SESSION['admin']) && isset($_GET['t'])) {
    $params = array('tournament' => json_decode(Tournament::getInfoForTournament($_GET['t'])),
        'sponsors' => json_decode(Sponsor::getAllSponsorForTournament($_GET['t'])),
        'allsponsors' => json_decode(Sponsor::getAllSponsors()));

    $tpl->render('adminSponsor', $params);
} else
    $tpl->render('error');
