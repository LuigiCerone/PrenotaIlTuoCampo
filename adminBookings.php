<?php
ini_set("display_errors",0);
require_once('templateInit.php');
require_once('resources/src/model/Booking.php');

ini_set("display_errors", 0);

session_start();

$tpl = templateInit::Instance();

// Here I can add some content if needed.
//$json = "{\"reviews\":[{\"username\":\"User1\",\"value\":1},{\"username\":\"User2\",\"number\":2}]}";

if ($_SESSION['id'] != null) {
    $params = array('bookings' => json_decode(Booking::getNotValidBookingsForUser($_SESSION['id'])));
    $tpl->render('adminBookings', $params);
} else
    $tpl->render('error');