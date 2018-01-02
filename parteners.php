<?php
require_once('templateInit.php');
session_start();
$tpl = templateInit::Instance();

// Here I can add some content if needed.
$json = "{\"partners\":[{\"name\":\"Nome1\",\"number\":1},{\"name\":\"Nome2\",\"number\":2}]}";
$params = array('partners' => json_decode($json));

$tpl->render('partners', $params);
