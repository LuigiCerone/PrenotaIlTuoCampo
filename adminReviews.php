<?php
ini_set("display_errors",0);
require_once('templateInit.php');
require_once('resources/src/model/Review.php');
session_start();
$tpl = templateInit::Instance();

// Here I can add some content if needed.
//$json = "{\"reviews\":[{\"username\":\"User1\",\"value\":1},{\"username\":\"User2\",\"value\":2}]}";
$params = array('reviews' => json_decode(Review::getNewReviews()));

$tpl->render('adminReviews', $params);
