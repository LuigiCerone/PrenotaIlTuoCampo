<?php
ini_set("display_errors",0);
require_once('templateInit.php');
require_once ('resources/src/model/Partner.php');

session_start();
$tpl = templateInit::Instance();
$params = array('partners' => json_decode(Partner::getAllPartners()));

$tpl->render('partners', $params);
