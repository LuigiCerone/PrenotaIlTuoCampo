<?php
ini_set("display_errors", 0);
require_once('templateInit.php');
require_once('resources/src/model/Field.php');
require_once('resources/src/model/Supply.php');

session_start();
$tpl = templateInit::Instance();

if (isset($_POST['selectedSport']) && isset($_POST['selectedPartner']) && isset($_POST['selectedPartner'])) {
    $booking = array(
        'sport' => $_POST['sport'],
        'province' => $_POST['province'],
        'partner' => $_POST['partner'],
        'date' => $_POST['date'],
        'time' => $_POST['time'],
        'selectedSport' => $_POST['selectedSport'],
        'selectedProvince' => $_POST['selectedProvince'],
        'selectedPartner' => $_POST['selectedPartner']);
    $obj = json_encode($booking);
    $params = array('booking' => json_decode($obj),
        'fields' => json_decode(Field::getAllAvailableFields($_POST['selectedSport'], $_POST['selectedPartner'], $_POST['date'], $_POST['time'])));

    $supplies = json_decode(Supply::getAllSuppliesForPartner($_POST['selectedPartner']));
    if (count($supplies) > 0) {
        $params['supplies'] = $supplies;
    }
    $tpl->render('bookingReview', $params);
}
