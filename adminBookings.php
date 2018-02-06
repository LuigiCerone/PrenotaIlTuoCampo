<?php
ini_set("display_errors", 0);
require_once('templateInit.php');
require_once('resources/src/model/Booking.php');

session_start();

$tpl = templateInit::Instance();

if (isset($_SESSION['id']) && isset($_SESSION['admin'])) {
    $params = array('notValidBookings' => json_decode(Booking::getNotValidBookings()),
        'notApprovedBookings' => json_decode(Booking::getNotApprovedBookings()));

    $tpl->render('adminBookings', $params);
} else
    $tpl->render('error');