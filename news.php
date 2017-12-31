<?php
require_once('templateInit.php');

$tpl = templateInit::Instance();

// Here I can add some content if needed.
$json = "{\"news\":[{\"username\":\"User1\",\"value\":1},{\"username\":\"User2\",\"number\":2}]}";
$params = array('news' => json_decode($json));

$tpl->render('news', $params);
