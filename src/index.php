<?php
// put full path to Smarty.class.php
require('../include/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/smarty/templates/');
$smarty->setCompileDir('/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/smarty/templates_c');

$smarty->setCacheDir('/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/smarty/cache');

$smarty->setConfigDir('/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/smarty/configs');

$smarty->assign('name', 'Ned');
$smarty->debugging = true;
$smarty->display('index.tpl');

echo "vjovknfvo";

?>