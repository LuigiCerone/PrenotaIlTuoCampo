<?php
require_once('templateInit.php');

session_start();

$tpl = templateInit::Instance();

// Here I can add some content if needed.
//$json = "{\"reviews\":[{\"username\":\"User1\",\"value\":1},{\"username\":\"User2\",\"number\":2}]}";
//$params = array('reviews' => json_decode($json));

if ($SESSION['id'] != null)
    $tpl->render('bookings');
else
    $tpl->render('error');