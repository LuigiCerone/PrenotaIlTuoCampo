<?php
ini_set("display_errors",0);
require_once('templateInit.php');

session_start();

$tpl = templateInit::Instance();

// Here I can add some content if needed.
//$json = "{\"reviews\":[{\"username\":\"User1\",\"value\":1},{\"username\":\"User2\",\"number\":2}]}";
//$params = array('reviews' => json_decode($json));

if ($_SESSION['id'] != null)
    $tpl->render('messagess');
else
    $tpl->render('error');
