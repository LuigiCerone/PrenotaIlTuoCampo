<?php
ini_set("display_errors", 0);

require_once('templateInit.php');
require_once('resources/src/model/Tournament.php');
require_once('resources/src/model/Sport.php');
require_once('resources/src/model/Partner.php');

session_start();
$tpl = templateInit::Instance();

if (isset($_SESSION['admin'])) {
    $params = array('tournaments' => json_decode(Tournament::getAllAdminTournaments()),
        'sports' => json_decode(Sport::getAllSports()),
        'partners' => json_decode(Partner::getAllPartners()));

    $tpl->render('adminTournaments', $params);
} else if (isset($_SESSION['moderator'])) {
    $params = array('tournaments' => json_decode(Tournament::getAllTournamentsForPartner($_SESSION['moderator'])),
        'sports' => json_decode(Sport::getAllSports()),
        'partner' => json_decode(Partner::getPartnerById($_SESSION['moderator'])));

    $tpl->render('adminTournaments', $params);
} else
    $tpl->render('error');
