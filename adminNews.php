<?php
ini_set("display_errors", 0);
require_once('templateInit.php');
require_once('resources/src/model/News.php');
session_start();
$tpl = templateInit::Instance();

$params = array('news' => json_decode(News::getAllNews()));
$tpl->render('adminNews', $params);
