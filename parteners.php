<?php
ini_set("display_errors", 0);
require_once('templateInit.php');
require_once('resources/src/model/Partner.php');

session_start();
$tpl = templateInit::Instance();
//$page = empty($_GET['page']) ? 1 : (int)$_GET['page'];
$params = array('partners' => json_decode(Partner::getAllPartners()));

$tpl->render('partners', $params);
