<?php
ini_set("display_errors", 0);
require_once('templateInit.php');
require_once('resources/src/model/Partner.php');
require_once('resources/src/model/Sport.php');
require_once('resources/src/model/Supply.php');
require_once('resources/src/model/Province.php');

session_start();
$tpl = templateInit::Instance();
$params = array('partners' => json_decode(Partner::getAllPartners()),
    'sports' => json_decode(Sport::getAllSports()),
    'supplies' => json_decode(Supply::getAllSupplies()),
    'provinces' => json_decode(Province::getAllProvinces()));

$tpl->render('adminPartners', $params);
