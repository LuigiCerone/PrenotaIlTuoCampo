<?php
/* Smarty version 3.1.30, created on 2017-12-21 16:14:52
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/test.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3bcfec780312_35807101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6400fc02bb5ec9305db9226bba980baff14e2116' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/test.tpl',
      1 => 1513869288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a3bcfec780312_35807101 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9637769865a3bcfec77eaa8_28122942', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3761255205a3bcfec77f678_05439001', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3580529845a3bcfec780004_32012371', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_9637769865a3bcfec77eaa8_28122942 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_3761255205a3bcfec77f678_05439001 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_3580529845a3bcfec780004_32012371 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    this is content
<?php
}
}
/* {/block "content"} */
}
