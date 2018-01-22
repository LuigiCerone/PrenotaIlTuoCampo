<?php
require_once('templateInit.php');
session_start();
$tpl = templateInit::Instance();

// Here I can add some content if needed.
$json = "{\"reviews\":[{\"username\":\"User1\",\"value\":1},{\"username\":\"User2\",\"value\":2}]}";
$params = array('reviews' => json_decode($json));

$tpl->render('reviews', $params);