<?php
ini_set("display_errors",0);
require_once('templateInit.php');
require_once('resources/src/model/Field.php');

session_start();
$tpl = templateInit::Instance();
//    print_r($_POST);
//print_r($_POST);

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
$tpl->render('bookingReview', $params);

// Here I can add some content if needed.
//$json = "{\"partners\":[{\"name\":\"Nome1\",\"number\":1},{\"name\":\"Nome2\",\"number\":2}]}";
//$params = array('partners' => json_decode(Partner::getAllPartners()));

