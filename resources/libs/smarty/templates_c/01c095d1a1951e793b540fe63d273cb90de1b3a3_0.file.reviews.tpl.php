<?php
/* Smarty version 3.1.30, created on 2018-01-30 12:01:30
  from "C:\Users\dany\PhpstormProjects\PrenotaIlTuoCampo\resources\templates\reviews.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a70508a5d44d6_21787523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01c095d1a1951e793b540fe63d273cb90de1b3a3' => 
    array (
      0 => 'C:\\Users\\dany\\PhpstormProjects\\PrenotaIlTuoCampo\\resources\\templates\\reviews.tpl',
      1 => 1517306030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a70508a5d44d6_21787523 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4616524745a70508a56f998_36079535', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19769412125a70508a5714e6_13028694', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3987437515a70508a5d3d25_71139078', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_4616524745a70508a56f998_36079535 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_19769412125a70508a5714e6_13028694 extends Smarty_Internal_Block
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
class Block_3987437515a70508a5d3d25_71139078 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">Cosa dicono di noi?</h2>
    
    <br>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviews']->value, 'review');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
?>
        <section>
            <div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-block">
                                <h4 class="card-title">Recensione di <?php echo $_smarty_tpl->tpl_vars['review']->value->firstName;?>
</h4>
                                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['review']->value->text;?>
</p>
                                <p class="pull-right"><input type="number" name="rating" id="stars_rating"
                                                             data-icon-lib="fa"
                                                             data-active-icon="fa-star" data-inactive-icon=" fa-star-o"
                                                             class="rating bigger" value="<?php echo $_smarty_tpl->tpl_vars['review']->value->stars;?>
"
                                                             data-readonly/>
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


    
    <?php if (($_SESSION['id'] != null)) {?>
        <span class="hidden" id="id"><?php echo $_SESSION['id'];?>
</span>
        <div class="row" id="post-review-box">
            <div class="col-md-6 col-center-block">
                <form accept-charset="UTF-8" action="" method="post">
                    <textarea class="form-control animated" cols="50" id="reviewText" name="comment"
                              placeholder="Inserisci la tua recensione qui..." rows="5"></textarea>

                    <div class="text-right">
                        <input type="number" name="rating" id="reviewStars" data-icon-lib="fa"
                               data-active-icon="fa-star" data-inactive-icon=" fa-star-o" class="rating bigger"
                               value="1"/>
                        <br>
                        <button id="saveReview" class="btn btn-success btn-lg" type="submit">Salva
                        </button>
                    </div>
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
