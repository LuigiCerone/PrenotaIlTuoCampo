<?php
require_once('templateInit.php');
require_once('resources/src/model/Availability.php');

$tpl = templateInit::Instance();
session_start();

// Here I can add some content if needed.
//$json = "{\"news\":[{\"username\":\"User1\",\"value\":1},{\"username\":\"User2\",\"number\":2}]}";
//$params = array('news' => json_decode($json));

if ($_SESSION['id'] != null) {
    $params = array('availabilities' =>
        json_decode(Availability::getAllAvailabilitiesForUser($_SESSION['id'])));
    $tpl->render('availability', $params);
} else
    $tpl->render('error');

