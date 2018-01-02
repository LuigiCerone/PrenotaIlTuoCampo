<?php

require_once('templateInit.php');

$tpl = templateInit::Instance();

// Here I can add some content if needed.
session_start();
//$params = array('logged' => false);
//echo "Session's id: " . $_SESSION['id'];
$tpl->render('index');