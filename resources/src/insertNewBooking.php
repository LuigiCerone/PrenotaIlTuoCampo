<?php
require_once('model/Booking.php');

session_start();

if (isset($SESSION['id'])) {
//    id, date, time, user_fk, field_fk, approved, valid
    if (isset($_POST['date']) && isset($_POST['time']) && isset($_POST['field_fk'])) {
        if (isset($_SESSION['admin']))
            $booking = new Booking($_POST['date'], $_POST['time'], null, $_POST['field_fk']);
        else
            $booking = new Booking($_POST['date'], $_POST['time'], $_SESSION['id'], $_POST['field_fk']);
        if ($booking->insert())
            http_response_code(200);
        else
            http_response_code(500);
    }
} else
    http_response_code(500);