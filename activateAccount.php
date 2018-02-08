<?php
ini_set("display_errors", 0);
require_once('templateInit.php');

$tpl = templateInit::Instance();
session_start();
$tpl->render('activateAccount');
