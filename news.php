<?php
ini_set("display_errors",0);
require_once('templateInit.php');
require_once('resources/src/model/Novita.php');
session_start();
$tpl = templateInit::Instance();

// Here I can add some content if needed.
//$json = "{\"news\":[{\"username\":\"User1\",\"value\":1},{\"username\":\"User2\",\"number\":2}]}";
$params = array('news' => json_decode(Novita::getAllNews()));

$tpl->render('news', $params);
