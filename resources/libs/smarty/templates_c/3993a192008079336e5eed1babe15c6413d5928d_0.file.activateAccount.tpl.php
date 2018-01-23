<?php
/* Smarty version 3.1.30, created on 2018-01-23 11:32:15
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/activateAccount.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a670f2f1729c6_76759307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3993a192008079336e5eed1babe15c6413d5928d' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/activateAccount.tpl',
      1 => 1516703517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a670f2f1729c6_76759307 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5967605965a670f2f16ef82_00930668', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3827064035a670f2f170bd6_17533287', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16884175305a670f2f172151_18096261', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_5967605965a670f2f16ef82_00930668 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_3827064035a670f2f170bd6_17533287 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_16884175305a670f2f172151_18096261 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">Ultimo passo, attiva l'account!</h2>
    
    <br>
    Per iniziare ad utilizzare il sito è necessario cliccare sul link di conferma presente nell'email che ti è appena stata mandata!
    <!-- /banner -->
<?php
}
}
/* {/block "content"} */
}
