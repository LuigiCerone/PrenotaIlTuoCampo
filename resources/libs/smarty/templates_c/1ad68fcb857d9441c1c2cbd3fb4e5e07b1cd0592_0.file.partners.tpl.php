<?php
/* Smarty version 3.1.30, created on 2018-02-09 11:18:21
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/partners.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7d756d20fbb1_75370899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ad68fcb857d9441c1c2cbd3fb4e5e07b1cd0592' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/partners.tpl',
      1 => 1518171498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a7d756d20fbb1_75370899 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4359187365a7d756d1ffaa5_46457889', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9604184915a7d756d202ca8_87067061', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1613407515a7d756d20f0b1_06685793', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_4359187365a7d756d1ffaa5_46457889 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_9604184915a7d756d202ca8_87067061 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/jquery.easyPaginate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/projectScript/partners.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_1613407515a7d756d20f0b1_06685793 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">I nostri principali partners.</h2>
    <br>
    
    <br>
    <section>
        <div class="container  break-text">
            <div id="pagination">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['partners']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <div class="card">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-block">
                                    <h4 class="card-title">Centro sportivo <?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
</h4>
                                    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['item']->value->description;?>
</p>
                                    <p class="card-text">Vieni a trovarci o chiamaci al <?php echo $_smarty_tpl->tpl_vars['item']->value->telnumber;?>
</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-fluid img-responsive">
                                    <img class="img-bottom"
                                         src="<?php echo $_smarty_tpl->tpl_vars['item']->value->img;?>
"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </div>
    </section>
    <!-- /banner -->
<?php
}
}
/* {/block "content"} */
}
