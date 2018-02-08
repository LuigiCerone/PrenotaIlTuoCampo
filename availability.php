<?php
ini_set("display_errors",0);
require_once('templateInit.php');
require_once('resources/src/model/Availability.php');

$tpl = templateInit::Instance();
session_start();

if ($_SESSION['id'] != null) {
    $params = array('availabilities' =>
        json_decode(Availability::getAllAvailabilitiesForUser($_SESSION['id'])));
    $tpl->render('availability', $params);
} else
    $tpl->render('error');

