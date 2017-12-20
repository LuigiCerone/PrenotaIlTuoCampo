<?php
// put full path to Smarty.class.php
require('../include/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c');

$smarty->setCacheDir('cache');

$smarty->setConfigDir('configs');

$smarty->assign('name', 'Ned');
$smarty->debugging = true;
$smarty->display('index.tpl');

echo "vjovknfvo";

?>