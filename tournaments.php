<?php
ini_set("display_errors",0);
require_once('templateInit.php');
require_once('resources/src/model/Tournament.php');

session_start();
$tpl = templateInit::Instance();

// Here I can add some content if needed.
//$json = "{\"partners\":[{\"name\":\"Nome1\",\"number\":1},{\"name\":\"Nome2\",\"number\":2}]}";
$params = array('tournaments' => json_decode(Tournament::getAllTournaments()));

$tpl->render('tournaments', $params);
