<?php
/* Smarty version 3.1.30, created on 2018-02-09 19:41:26
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/stats.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7deb564a4394_58018594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a783305160b084be9fd13a90cdaf5e1173e157a9' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/stats.tpl',
      1 => 1518201681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a7deb564a4394_58018594 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19301177445a7deb56493468_66942124', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12773733805a7deb56495a75_61822218', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_957257945a7deb564a2ad9_73482575', "content");
?>



<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_19301177445a7deb56493468_66942124 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_12773733805a7deb56495a75_61822218 extends Smarty_Internal_Block
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
class Block_957257945a7deb564a2ad9_73482575 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">Le mie statistiche</h2>
    <div class="container">
        <div id="checkboxes">
            <input type="text" id="sportsNumber" class="hidden" value="<?php echo count($_smarty_tpl->tpl_vars['sports']->value);?>
"/>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sports']->value, 'sport');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sport']->value) {
?>
                <div>
                    <input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['sport']->value->id;?>
" name="supplies"
                           value="<?php echo $_smarty_tpl->tpl_vars['sport']->value->name;?>
">
                    <label for="<?php echo $_smarty_tpl->tpl_vars['sport']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['sport']->value->name;?>
</label>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
        <div class="chart-container">
            <canvas id="pileChart"></canvas>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
