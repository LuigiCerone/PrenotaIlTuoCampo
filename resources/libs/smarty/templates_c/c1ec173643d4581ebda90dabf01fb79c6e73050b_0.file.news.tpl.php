<?php
/* Smarty version 3.1.30, created on 2018-02-12 11:27:25
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/news.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a816c0df1fa81_75506138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1ec173643d4581ebda90dabf01fb79c6e73050b' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/news.tpl',
      1 => 1518431242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a816c0df1fa81_75506138 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15618381745a816c0df12ae6_26558611', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5842542175a816c0df15280_52973698', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6104615155a816c0df1ef62_31860589', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_15618381745a816c0df12ae6_26558611 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_5842542175a816c0df15280_52973698 extends Smarty_Internal_Block
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
class Block_6104615155a816c0df1ef62_31860589 extends Smarty_Internal_Block
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
                            <div class="col-md-12">
                                <div class="card-block">
                                    <h4 class="card-title">Titolo:<?php echo $_smarty_tpl->tpl_vars['new']->value->title;?>
</h4>
                                    <h6 class="card-title">
                                        Giorno:<?php echo $_smarty_tpl->tpl_vars['new']->value->date;?>
</h6>
                                    <p class="card-text">Novità:<?php echo $_smarty_tpl->tpl_vars['new']->value->text;?>
</p>
                                </div>
                            </div>
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
