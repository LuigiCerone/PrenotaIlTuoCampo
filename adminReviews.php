<?php
ini_set("display_errors", 0);
require_once('templateInit.php');
require_once('resources/src/model/Review.php');
session_start();
$tpl = templateInit::Instance();

// Here I can add some content if needed.
//$json = "{\"reviews\":[{\"username\":\"User1\",\"value\":1},{\"username\":\"User2\",\"value\":2}]}";
$reviews = json_decode(Review::getNewReviews());

if (count($reviews) != 0) {
    $params = array('reviews' => $reviews);
    $tpl->render('adminReviews', $params);
} else
    $tpl->render('adminReviews');