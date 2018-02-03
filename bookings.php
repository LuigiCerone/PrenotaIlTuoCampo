<?php
ini_set("display_errors", 0);
require_once('templateInit.php');
require_once('resources/src/model/Booking.php');

ini_set("display_errors", 0);

session_start();

$tpl = templateInit::Instance();

// Here I can add some content if needed.
//$json = "{\"reviews\":[{\"username\":\"User1\",\"value\":1},{\"username\":\"User2\",\"number\":2}]}";

if (isset($_SESSION['id'])) {
    $params = array('bookings' => json_decode(Booking::getAllBookingsForUser($_SESSION['id'])));
    $tpl->render('bookings', $params);
} else
    $tpl->render('error');