<?php
require_once('model/Booking.php');

session_start();

if (isset($_POST["id"])) {

    Booking::delete($_POST["id"]);

}
