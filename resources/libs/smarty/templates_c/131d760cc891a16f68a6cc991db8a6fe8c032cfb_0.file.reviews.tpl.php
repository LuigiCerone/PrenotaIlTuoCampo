<?php
/* Smarty version 3.1.30, created on 2018-02-08 17:23:55
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/reviews.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7c799b30ad92_28305357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '131d760cc891a16f68a6cc991db8a6fe8c032cfb' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/reviews.tpl',
      1 => 1518106973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a7c799b30ad92_28305357 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9180904615a7c799b2fa348_32507481', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18344818515a7c799b2fca66_17783694', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3683276685a7c799b30a2e0_09587977', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_9180904615a7c799b2fa348_32507481 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_18344818515a7c799b2fca66_17783694 extends Smarty_Internal_Block
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
class Block_3683276685a7c799b30a2e0_09587977 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">Cosa dicono di noi?</h2>
    
    <br>
    <section>
        <div class="container break-text">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviews']->value, 'review');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
?>
                <div class="row">
                    <div class="card">
                        <div class="card-block ">
                            <div class="col-md-6">
                                <h4 class="card-title">Recensione di <?php echo $_smarty_tpl->tpl_vars['review']->value->firstName;?>
</h4>
                                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['review']->value->text;?>
</p>
                            </div>
                            <div class="col-md-5">
                                <input type="number" name="rating" id="stars_rating"
                                       data-icon-lib="fa"
                                       data-active-icon="fa-star"
                                       data-inactive-icon=" fa-star-o"
                                       class="rating bigger"
                                       value="<?php echo $_smarty_tpl->tpl_vars['review']->value->stars;?>
"
                                       data-readonly/>

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
    </section>
    
    <?php if (isset($_SESSION['id'])) {?>
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
