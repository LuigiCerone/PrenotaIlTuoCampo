<?php
require_once('templateInit.php');
require_once('resources/src/model/Partner.php');

session_start();
$tpl = templateInit::Instance();
//    print_r($_POST);
print_r($_POST);

$booking = array(
    'selectedSport' => $_POST['selectedSport'],
    'selectedProvince' => $_POST['selectedProvince'],
    'selectedPartner' => $_POST['selectedPartner']);
$params = json_encode(array('booking' => $booking));
$tpl->render('bookingReview', $params);

// Here I can add some content if needed.
//$json = "{\"partners\":[{\"name\":\"Nome1\",\"number\":1},{\"name\":\"Nome2\",\"number\":2}]}";
//$params = array('partners' => json_decode(Partner::getAllPartners()));

