<?php
require_once('model/Booking.php');

session_start();

if ((isset($_SESSION['admin']) || isset($_SESSION['moderator'])) && isset($_POST["id"])) {
    if (Booking::approveBooking($_POST["id"]))
        http_response_code(200);
    else
        http_response_code(500);
}
