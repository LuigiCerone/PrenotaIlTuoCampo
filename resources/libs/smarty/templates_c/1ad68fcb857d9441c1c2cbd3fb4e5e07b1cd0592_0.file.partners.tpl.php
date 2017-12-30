<?php
/* Smarty version 3.1.30, created on 2017-12-30 16:41:56
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/partners.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a47b3c4576685_38956675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ad68fcb857d9441c1c2cbd3fb4e5e07b1cd0592' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/partners.tpl',
      1 => 1514648512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a47b3c4576685_38956675 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10879983175a47b3c4571f67_14628997', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1929813825a47b3c4572d97_97058076', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15540238305a47b3c4575cf5_54400108', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_10879983175a47b3c4571f67_14628997 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_1929813825a47b3c4572d97_97058076 extends Smarty_Internal_Block
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
class Block_15540238305a47b3c4575cf5_54400108 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">I nostri principali partners.</h2>
    <br>
    
    <br>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['partners']->value->partners, 'partner');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['partner']->value) {
?>
        <section>
            <div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-block">
                                <h4 class="card-title">Centro sportivo <?php echo $_smarty_tpl->tpl_vars['partner']->value->name;?>
</h4>
                                <p class="card-text">Cras convallis ut turpis vitae facilisis. Morbi eu augue vel quam
                                    efficitur rhoncus vitae eget lectus. Cras augue ligula, aliquam ut enim ut, feugiat
                                    imperdiet sem. Integer sed mi quis nisl eleifend interdum.</p>
                                <p class="card-text">Vieni a trovarci o chiamaci al <?php echo $_smarty_tpl->tpl_vars['partner']->value->number;?>
</p>
                                <a href="#" class="btn btn-primary">Read More (serve?)</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-img-bottom">
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
<?php
}
}
/* {/block "content"} */
}
