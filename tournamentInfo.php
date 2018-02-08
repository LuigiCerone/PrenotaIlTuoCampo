<?php
ini_set("display_errors", 0);
require_once('templateInit.php');
require_once('resources/src/model/Tournament.php');
require_once('resources/src/model/Award.php');
require_once('resources/src/model/Sponsor.php');

session_start();
$tpl = templateInit::Instance();
if (isset($_GET['t'])) {
    $params = array('tournament' => json_decode(Tournament::getInfoForTournament($_GET['t'])));

    $awards = json_decode(Award::getAllAwardsForTournament($_GET['t']));
    if (count($awards) > 0)
        $params['awards'] = $awards;

    $sponsors = json_decode(Sponsor::getAllSponsorForTournament($_GET['t']));
    if (count($sponsors) > 0)
        $params['sponsors'] = $sponsors;


    $tpl->render('tournamentInfo', $params);
}


