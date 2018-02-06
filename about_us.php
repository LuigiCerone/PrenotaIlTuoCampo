<?php
ini_set("display_errors", 0);
require_once('templateInit.php');
ini_set("display_errors", 0);

session_start();

$tpl = templateInit::Instance();
$tpl->render('about_us');
