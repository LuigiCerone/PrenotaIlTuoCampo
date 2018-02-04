<?php
/* Smarty version 3.1.30, created on 2018-02-04 15:34:11
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminNews.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7719e304b637_03598800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c7b0b4a864be3d1df9ad6c1410804475e8c963e' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminNews.tpl',
      1 => 1517754847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a7719e304b637_03598800 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_444130735a7719e3034dc3_25333039', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1943040435a7719e3038232_16672864', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16661673595a7719e304a6b3_06671131', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_444130735a7719e3034dc3_25333039 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_1943040435a7719e3038232_16672864 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/projectScript/adminNews.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_16661673595a7719e304a6b3_06671131 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">Ultime novità!</h2>
    
    <br>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'new');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['new']->value) {
?>
        <section>
            <div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-block">
                                <h4 class="card-title">Titolo:<?php echo $_smarty_tpl->tpl_vars['new']->value->title;?>
</h4>
                                <h6 class="card-title">Giorno:<?php echo $_smarty_tpl->tpl_vars['new']->value->date;?>
</h6>
                                <p class="card-text">Novità:<?php echo $_smarty_tpl->tpl_vars['new']->value->text;?>
</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <br>
    <hr>
    <br>
    <!-- /banner -->
    <?php if (isset($_SESSION['id'])) {?>
        <span class="hidden" id="id"><?php echo $_SESSION['id'];?>
</span>
        <div class="col-md-6 col-center-block">
            <div class="signin-form profile">
                <form id="addNewForm" class="mod2">
                    <div class="row">
                        <div class="col-md-6">
                            <input class="form-control" type="text" id="titleNews" name="insertTitle"
                                   placeholder="Inserisci il titolo"/>
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" id="textNews" name="insertText" type="text"
                                   placeholder="Inserisci le nuove info" required/>
                        </div>

                        <div class="col-md-6">
                            <input class="form-control" id="titleDate" name="titleDate" type="text"
                                   placeholder="Inserisci data" required/>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-5 col-center-block">
                            <div class="agile-submit ">
                                <input type="submit" value="Inserisci">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php }
}
}
/* {/block "content"} */
}
