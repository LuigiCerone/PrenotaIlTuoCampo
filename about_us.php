<?php
ini_set("display_errors",0);
require_once('templateInit.php');
ini_set( "display_errors", 0);

session_start();

$tpl = templateInit::Instance();

// Here I can add some content if needed.
//$json = "{\"reviews\":[{\"username\":\"User1\",\"value\":1},{\"username\":\"User2\",\"number\":2}]}";
//$params = array('reviews' => json_decode($json));

$tpl->render('about_us');
