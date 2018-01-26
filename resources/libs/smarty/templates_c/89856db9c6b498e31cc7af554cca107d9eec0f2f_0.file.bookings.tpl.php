<?php
/* Smarty version 3.1.30, created on 2018-01-26 11:12:26
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/bookings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6aff0a888404_59717133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89856db9c6b498e31cc7af554cca107d9eec0f2f' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/bookings.tpl',
      1 => 1516961542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a6aff0a888404_59717133 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16164665595a6aff0a878a12_20033331', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7484377705a6aff0a87b0d8_68829213', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2498767555a6aff0a886c89_11876768', "content");
?>



<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_16164665595a6aff0a878a12_20033331 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_7484377705a6aff0a87b0d8_68829213 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/projectScript/bookings.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_2498767555a6aff0a886c89_11876768 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">Le mie prenotazioni</h2>
    <div class="container">
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bookings']->value, 'booking');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['booking']->value) {
?>
            <div class="card">
                <div class="row">
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
    <!-- /banner -->

    <!-- Modal1 -->
    <div class="modal fade" id="removeBooking" tabindex="-1" role="dialog">
        <div class="modal-dialog change_pass">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="agileinfo_sign">Anullamento prenotazione</h3>
                    Sei sicuro di voler disdire la prenotazione?
                    <span id="error"></span>
                    <div class="modal-footer">
                        <button id="saveBooking" type="button" class="btn btn-primary">Si, disdici</button>
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
