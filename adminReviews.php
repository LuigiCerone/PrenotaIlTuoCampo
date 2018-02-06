<?php
ini_set("display_errors", 0);
require_once('templateInit.php');
require_once('resources/src/model/Review.php');
session_start();
$tpl = templateInit::Instance();

$reviews = json_decode(Review::getNewReviews());

if (count($reviews) != 0) {
    $params = array('reviews' => $reviews);
    $tpl->render('adminReviews', $params);
} else
    $tpl->render('adminReviews');