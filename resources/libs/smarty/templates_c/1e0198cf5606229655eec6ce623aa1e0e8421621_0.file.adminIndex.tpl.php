<?php
/* Smarty version 3.1.30, created on 2018-01-30 17:59:58
  from "C:\Users\dany\PhpstormProjects\PrenotaIlTuoCampo\resources\templates\adminIndex.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a70a48ee58491_93843250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e0198cf5606229655eec6ce623aa1e0e8421621' => 
    array (
      0 => 'C:\\Users\\dany\\PhpstormProjects\\PrenotaIlTuoCampo\\resources\\templates\\adminIndex.tpl',
      1 => 1517331597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a70a48ee58491_93843250 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5152479035a70a48ee45e50_62014874', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9067691505a70a48ee471c2_27430993', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2771624665a70a48ee57cb0_72115793', "content");
?>



<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_5152479035a70a48ee45e50_62014874 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_9067691505a70a48ee471c2_27430993 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/projectScript/adminBbookingDelete.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_2771624665a70a48ee57cb0_72115793 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2 class="title">Prenotazioni da considerare </h2>
<div class="container">
    <div class="list-group">
    
    
    
        
            
                 
                
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bookings']->value, 'booking');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['booking']->value) {
?>

            <div class="row ">
                <div class="col-md-3">
                </div>
                <div class="col-md-1">
                    <img src="public/images/booking.png" class="booking-img rounded-circle"/>
                </div>
                <div class="col-md-6">
                    <div class="card-block">
                        <h4 class="card-title">Prenotazione numero <?php echo $_smarty_tpl->tpl_vars['booking']->value->id;?>
</h4>
                        <p class="card-text">Data: <?php echo $_smarty_tpl->tpl_vars['booking']->value->date;?>
, ora: <?php echo $_smarty_tpl->tpl_vars['booking']->value->time;?>
</p>
                        <p class="card-text">Campo numero: <?php echo $_smarty_tpl->tpl_vars['booking']->value->field_fk;?>
</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <i data-id="<?php echo $_smarty_tpl->tpl_vars['booking']->value->id;?>
" class="fa fa-trash delete" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>


    <!-- Modal1 -->
    <div class="modal fade" id="removeBooking" tabindex="-1" role="dialog">
        <div class="modal-dialog change_pass">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="agileinfo_sign">Anullamento prenotazione</h3>
                    <span id="error"></span>
                    <div class="modal-footer">
                        <button id="saveBooking" type="button" class="btn btn-primary">Elimina</button>
                        <button id="cancel" type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi
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
