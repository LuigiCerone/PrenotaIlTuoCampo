<?php
require_once('model/Booking.php');
require_once('model/Match.php');

session_start();

if (isset($_SESSION['id'])) {
//    id, date, time, user_fk, field_fk, approved, valid
    if (isset($_POST['date']) && isset($_POST['time']) && isset($_POST['field'])) {
        if (isset($_SESSION['admin'])) {
            // TODO Add method for admin.
            $booking = new Booking($_POST['date'], $_POST['time'], null, $_POST['field']);
        } else
            $booking = new Booking($_POST['date'], $_POST['time'], $_SESSION['id'], $_POST['field']);
        if ($booking->insert()) {
            if (isset($_POST['match'])) {
                if (Match::updateInfo($_POST['match'], $_POST['date'], $_POST['time'], $_POST['field'])) {
                    http_response_code(200);
                    echo "" . $_POST['match'];
                } else {
                    http_response_code(500);
                }
            }
            http_response_code(200);
        } else {
            http_response_code(500);
        }
    }
} else {
    http_response_code(500);
}
