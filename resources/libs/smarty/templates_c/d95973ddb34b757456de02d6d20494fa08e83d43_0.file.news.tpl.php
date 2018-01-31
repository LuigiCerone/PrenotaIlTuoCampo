<?php
/* Smarty version 3.1.30, created on 2018-01-30 17:08:25
  from "C:\Users\dany\PhpstormProjects\PrenotaIlTuoCampo\resources\templates\news.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a709879593611_39962033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd95973ddb34b757456de02d6d20494fa08e83d43' => 
    array (
      0 => 'C:\\Users\\dany\\PhpstormProjects\\PrenotaIlTuoCampo\\resources\\templates\\news.tpl',
      1 => 1517328503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a709879593611_39962033 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10759942425a709879578213_12129548', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10212083165a7098795799d9_69666616', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4690235485a709879592f79_66739778', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_10759942425a709879578213_12129548 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_10212083165a7098795799d9_69666616 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/projectScript/news.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_4690235485a709879592f79_66739778 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">Ultime novità!</h2>
    
    <br>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'novita');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['novita']->value) {
?>
        <section>
            <div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-block">
                                <h4 class="card-title">Titolo:<?php echo $_smarty_tpl->tpl_vars['novita']->value->title;?>
</h4>
                                <h6 class="card-title">Giorno:<?php echo $_smarty_tpl->tpl_vars['novita']->value->date;?>
</h6>
                                <p class="card-text">Novità:<?php echo $_smarty_tpl->tpl_vars['novita']->value->text;?>
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

    <!-- /banner -->
    
    <?php if (($_SESSION['id'] != null)) {?>
        <span class="hidden" id="id"><?php echo $_SESSION['id'];?>
</span>
        <div class="row" id="post-review-box">
            <div class="col-md-6 col-center-block">
                <form accept-charset="UTF-8" action="" method="post">
                    <textarea class="form-control animated" cols="50" id="titleNews" name="insertTitle"
                              placeholder="Inserisci il titolo" rows="3"></textarea>
                    <textarea class="form-control animated" cols="50" id="titleDate" name="insertDate"
                              placeholder="Inserisci la data aaaa/mm/gg" rows="3"></textarea>
                    <textarea class="form-control animated" cols="50" id="textNews" name="insertText"
                              placeholder="Inserisci le nuove info" rows="5"></textarea>

                    
                        
                               
                               
                        <br>
                        <button id="saveNews" class="btn btn-success btn-lg" type="submit">Salva
                        </button>
                    
                </form>
            </div>
        </div>
    <?php }?>
    <!-- /banner -->
<?php
}
}
/* {/block "content"} */
}
