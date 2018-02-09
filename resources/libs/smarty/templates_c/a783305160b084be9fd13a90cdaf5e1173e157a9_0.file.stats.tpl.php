<?php
/* Smarty version 3.1.30, created on 2018-02-09 18:53:14
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/stats.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7de00adfdc44_25037966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a783305160b084be9fd13a90cdaf5e1173e157a9' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/stats.tpl',
      1 => 1518198783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a7de00adfdc44_25037966 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17564614865a7de00adf7627_46885133', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18092288695a7de00adfa127_95290615', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_302307905a7de00adfc7f5_10455617', "content");
?>



<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_17564614865a7de00adf7627_46885133 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_18092288695a7de00adfa127_95290615 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/projectScript/stats.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_302307905a7de00adfc7f5_10455617 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">Le mie statistiche</h2>
    <div class="container">
        <div class="chart-container">
            <canvas id="pileChart"></canvas>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
