<?php
ini_set("display_errors", 0);
require_once('templateInit.php');
require_once('resources/src/model/Booking.php');
require_once('resources/src/model/Sport.php');

session_start();
$tpl = templateInit::Instance();

if (isset($_SESSION['id'])) {
    $params = array('sports' => json_decode(Sport::getAllSportForUser($_SESSION['id'])));
    $tpl->render('stats', $params);
} else
    $tpl->render('error');