<?php
ini_set("display_errors", 0);
require_once('templateInit.php');
require_once('resources/src/model/Partner.php');
require_once('resources/src/model/Sport.php');
require_once('resources/src/model/Supply.php');

session_start();
$tpl = templateInit::Instance();
// Here I can add some content if needed.
//$json = "{\"partners\":[{\"name\":\"Nome1\",\"number\":1},{\"name\":\"Nome2\",\"number\":2}]}";
$params = array('partners' => json_decode(Partner::getAllPartners()),
    'sports' => json_decode(Sport::getAllSports()),
    'supplies' => json_decode(Supply::getAllSupplies()));

$tpl->render('adminPartners', $params);
