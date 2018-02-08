<?php
ini_set("display_errors",0);
require_once('templateInit.php');
require_once('resources/src/model/Review.php');

session_start();
$tpl = templateInit::Instance();

$params = array('reviews' => json_decode(Review::getAllReviews()));
$tpl->render('reviews', $params);
