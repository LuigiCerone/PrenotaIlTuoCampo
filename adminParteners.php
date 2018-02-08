<?php
ini_set("display_errors", 0);
require_once('templateInit.php');
require_once('resources/src/model/Partner.php');
require_once('resources/src/model/Sport.php');
require_once('resources/src/model/Supply.php');
require_once('resources/src/model/Province.php');

session_start();
$tpl = templateInit::Instance();
if (isset($_SESSION['admin']) && !isset($_SESSION['moderator'])) {
    $params = array('partners' => json_decode(Partner::getAllPartners()),
        'sports' => json_decode(Sport::getAllSports()),
        'supplies' => json_decode(Supply::getAllSupplies()),
        'provinces' => json_decode(Province::getAllProvinces()));
    $tpl->render('adminPartners', $params);
} else if (isset($_SESSION['moderator'])) {
    $params = array('partner' => json_decode(Partner::getPartnerById($_SESSION['moderator'])),
        'sports' => json_decode(Sport::getAllSports()),
        'supplies' => json_decode(Supply::getAllSupplies()),
        'provinces' => json_decode(Province::getAllProvinces()));
    $tpl->render('adminPartners', $params);
} else
    $tpl->render('error');

