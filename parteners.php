<?php
require_once('templateInit.php');
require_once ('resources/src/model/Partner.php');

session_start();
$tpl = templateInit::Instance();

// Here I can add some content if needed.
//$json = "{\"partners\":[{\"name\":\"Nome1\",\"number\":1},{\"name\":\"Nome2\",\"number\":2}]}";
$params = array('partners' => json_decode(Partner::getAllPartners()));

$tpl->render('partners', $params);
