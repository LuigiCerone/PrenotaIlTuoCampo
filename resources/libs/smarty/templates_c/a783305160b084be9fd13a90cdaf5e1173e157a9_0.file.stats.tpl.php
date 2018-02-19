<?php
/* Smarty version 3.1.30, created on 2018-02-19 10:35:23
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/stats.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a8a9a5b8140b8_87409708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a783305160b084be9fd13a90cdaf5e1173e157a9' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/stats.tpl',
      1 => 1519032920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a8a9a5b8140b8_87409708 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1710775985a8a9a5b7f8597_78937095', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5983632535a8a9a5b7fb066_12048671', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_598790185a8a9a5b812f61_52511050', "content");
?>



<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_1710775985a8a9a5b7f8597_78937095 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_5983632535a8a9a5b7fb066_12048671 extends Smarty_Internal_Block
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
class Block_598790185a8a9a5b812f61_52511050 extends Smarty_Internal_Block
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
            <canvas id="lineChart"></canvas>
        </div>
        <br>
        <hr>
        <br>
        <div class="chart-container">
            <canvas id="pileChart"></canvas>
        </div>
        <br>
        <hr>
        <br>
        <div class="chart-container">
            <canvas id="cakeChart"></canvas>
        </div>
        <br><br>
    </div>
<?php
}
}
/* {/block "content"} */
}
