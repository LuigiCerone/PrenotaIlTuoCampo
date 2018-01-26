<?php
require_once('templateInit.php');
require_once('resources/src/model/Booking.php');

session_start();

$tpl = templateInit::Instance();

// Here I can add some content if needed.
//$json = "{\"reviews\":[{\"username\":\"User1\",\"value\":1},{\"username\":\"User2\",\"number\":2}]}";

if ($_SESSION['id'] != null) {
    $params = array('bookings' => json_decode(Booking::getAllBookingsForUser($_SESSION['id'])));
    $tpl->render('bookings', $params);
} else
    $tpl->render('error');