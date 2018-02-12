<?php
/* Smarty version 3.1.30, created on 2018-02-12 17:25:13
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/news.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a81bfe918e937_03282441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1ec173643d4581ebda90dabf01fb79c6e73050b' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/news.tpl',
      1 => 1518452710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a81bfe918e937_03282441 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18367661965a81bfe9182656_00107103', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9458293305a81bfe9184cc4_64457933', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3800080725a81bfe918d8c6_20851125', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_18367661965a81bfe9182656_00107103 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_9458293305a81bfe9184cc4_64457933 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/jquery.easyPaginate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/projectScript/news.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_3800080725a81bfe918d8c6_20851125 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">Ultime novità!</h2>
    <br>
    <section>
        <div class="container  break-text">
            <div id="pagination">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'new');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['new']->value) {
?>
                    <div class="card">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-block">
                                    <h4 class="card-title"><b>Titolo:</b> <?php echo $_smarty_tpl->tpl_vars['new']->value->title;?>
</h4>
                                    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['new']->value->date;?>
</p>
                                    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['new']->value->text;?>
</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <hr>
                            <br>
                        </div>

                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </div>
    </section>
<?php
}
}
/* {/block "content"} */
}
