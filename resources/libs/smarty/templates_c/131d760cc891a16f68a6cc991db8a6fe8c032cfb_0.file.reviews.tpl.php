<?php
/* Smarty version 3.1.30, created on 2017-12-30 17:27:39
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/reviews.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a47be7b519021_10439994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '131d760cc891a16f68a6cc991db8a6fe8c032cfb' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/reviews.tpl',
      1 => 1514651256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a47be7b519021_10439994 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21345313505a47be7b512113_20756642', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12987519035a47be7b513991_03502188', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13824422545a47be7b5188f4_33770953', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_21345313505a47be7b512113_20756642 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_12987519035a47be7b513991_03502188 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/projectScript/reviews.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/bootstrap-rating-input.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_13824422545a47be7b5188f4_33770953 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">Cosa dicono di noi?</h2>
    
    <br>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviews']->value->reviews, 'review');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
?>
        <section>
            <div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-block">
                                <h4 class="card-title">Recensione di <?php echo $_smarty_tpl->tpl_vars['review']->value->username;?>
</h4>
                                <p class="card-text">Cras convallis ut turpis vitae facilisis. Morbi eu augue vel quam
                                    efficitur rhoncus vitae eget lectus. Cras augue ligula, aliquam ut enim ut, feugiat
                                    imperdiet sem. Integer sed mi quis nisl eleifend interdum.</p>
                                <p class="pull-right"><input type="number" name="rating" id="stars_rating" data-icon-lib="fa"
                                           data-active-icon="fa-star" data-inactive-icon=" fa-star-o" class="rating bigger" value="<?php echo $_smarty_tpl->tpl_vars['review']->value->value;?>
" data-readonly/>
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
<?php
}
}
/* {/block "content"} */
}
