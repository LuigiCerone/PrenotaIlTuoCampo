<?php
/* Smarty version 3.1.30, created on 2018-02-02 09:42:50
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminReviews.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a74248ad082b6_58064757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8c1b36576f66c5d777917ca2823a62446862b89' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminReviews.tpl',
      1 => 1517419096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a74248ad082b6_58064757 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7689646825a74248ace8300_37642505', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17234986305a74248aceb7f3_11146834', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6307751575a74248ad07181_72859624', "content");
?>



<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_7689646825a74248ace8300_37642505 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_17234986305a74248aceb7f3_11146834 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/projectScript/adminReviews.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/bootstrap-rating-input.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_6307751575a74248ad07181_72859624 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2 class="title">Le nuove recensoni</h2>
<div class="container">
    
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
                                
                                                             
                                                             
                                                             
                                                             
                                
                            </div>
                        </div>
                        <div class="col-md-2">
                            <i data-id="<?php echo $_smarty_tpl->tpl_vars['review']->value->id;?>
" class="fa fa-check add" aria-hidden="true"></i>
                            <i data-id="<?php echo $_smarty_tpl->tpl_vars['review']->value->id;?>
" class="fa fa-trash delete" aria-hidden="true"></i>
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


    <!-- Modal1 -->
    <div class="modal fade" id="saveReview" tabindex="-1" role="dialog">
        <div class="modal-dialog change_pass">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="agileinfo_sign">Approva Recensione</h3>
                    Sei sicuro di voler approvare?
                    <span id="error"></span>
                    <div class="modal-footer">
                        <button id="saveButton" type="button" class="btn btn-primary">Si</button>
                        <button id="cancel" type="button" class="btn btn-secondary" data-dismiss="modal">Annulla
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal1 -->
    <div class="modal fade" id="deleteReview" tabindex="-1" role="dialog">
        <div class="modal-dialog change_pass">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="agileinfo_sign">Elimina Recensione</h3>
                    Sei sicuro di voler eliminare?
                    <span id="error"></span>
                    <div class="modal-footer">
                        <button id="deleteButton" type="button" class="btn btn-primary">Rimuovi</button>
                        <button id="cancel" type="button" class="btn btn-secondary" data-dismiss="modal">Annulla
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
}
/* {/block "content"} */
}
