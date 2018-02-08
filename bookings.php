<?php
ini_set("display_errors", 0);
require_once('templateInit.php');
require_once('resources/src/model/Booking.php');

session_start();
$tpl = templateInit::Instance();

if (isset($_SESSION['id'])) {
    $params = array('bookings' => json_decode(Booking::getAllBookingsForUser($_SESSION['id'])));
    $tpl->render('bookings', $params);
} else
    $tpl->render('error');