<?php
/* Smarty version 3.1.30, created on 2017-12-30 13:22:08
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/partners.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4784f0d9be50_61574827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ad68fcb857d9441c1c2cbd3fb4e5e07b1cd0592' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/partners.tpl',
      1 => 1514636525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a4784f0d9be50_61574827 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18628471435a4784f0d96c00_91306726', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14457754915a4784f0d97b40_78717894', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19961074365a4784f0d9b9f8_86119840', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_18628471435a4784f0d96c00_91306726 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_14457754915a4784f0d97b40_78717894 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/projectScript/partners.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_19961074365a4784f0d9b9f8_86119840 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    this is my new content
    <br>
    <?php echo json_encode($_smarty_tpl->tpl_vars['partners']->value->partners);?>

    <br>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['partners']->value->partners, 'partner');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['partner']->value) {
?>
        <p>Nome: <?php echo $_smarty_tpl->tpl_vars['partner']->value->name;?>
</p>
        <p>Numero: <?php echo $_smarty_tpl->tpl_vars['partner']->value->number;?>
</p>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <!-- /banner -->
<?php
}
}
/* {/block "content"} */
}
