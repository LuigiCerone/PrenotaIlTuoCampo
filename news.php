<?php
ini_set("display_errors", 1);
require_once('templateInit.php');
require_once('resources/src/model/News.php');
session_start();
$tpl = templateInit::Instance();
//echo "" . News::getAllNews();
$params = array('news' => json_decode(News::getAllNews()));
$tpl->render('news', $params);
