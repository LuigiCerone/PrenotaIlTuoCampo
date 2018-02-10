<?php
require_once('model/Booking.php');
session_start();

if (isset($_SESSION['id'])) {
    $data = array('sports' => Booking::getMoreStats($_SESSION['id']),
        'partners' => Booking::getPartnerStats($_SESSION['id']));
    echo "" . json_encode($data);
} else {
    echo "Not ok";
}
