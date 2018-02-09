<?php
require_once('model/Booking.php');
session_start();

if (isset($_SESSION['id'])) {
    echo "" . Booking::getMoreStats($_SESSION['id']);
} else {
    echo "Not ok";
}
