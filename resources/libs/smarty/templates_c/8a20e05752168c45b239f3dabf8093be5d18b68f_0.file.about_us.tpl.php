<?php
/* Smarty version 3.1.30, created on 2018-01-30 12:33:24
  from "C:\Users\dany\PhpstormProjects\PrenotaIlTuoCampo\resources\templates\about_us.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7058043a1785_35302834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a20e05752168c45b239f3dabf8093be5d18b68f' => 
    array (
      0 => 'C:\\Users\\dany\\PhpstormProjects\\PrenotaIlTuoCampo\\resources\\templates\\about_us.tpl',
      1 => 1517306030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a7058043a1785_35302834 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12625315925a70580439e7d1_41150714', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8897662315a70580439fbd3_99869488', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6156458895a7058043a1267_35905887', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_12625315925a70580439e7d1_41150714 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_8897662315a70580439fbd3_99869488 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/projectScript/about_us.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_6156458895a7058043a1267_35905887 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <h2 class="title">Chi siamo?</h2>
        <br>
        Scrivere qui come funziona il sito, chi siamo e altro.
    </div>
<?php
}
}
/* {/block "content"} */
}
