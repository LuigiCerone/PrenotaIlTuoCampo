<?php
/* Smarty version 3.1.30, created on 2018-01-26 12:50:27
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/bookings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6b1603e1a9b3_11481211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89856db9c6b498e31cc7af554cca107d9eec0f2f' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/bookings.tpl',
      1 => 1516967425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a6b1603e1a9b3_11481211 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15776150505a6b1603e06d89_67765981', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19260298075a6b1603e094b9_17212704', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20463120105a6b1603e195e5_24729721', "content");
?>



<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_15776150505a6b1603e06d89_67765981 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_19260298075a6b1603e094b9_17212704 extends Smarty_Internal_Block
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
class Block_20463120105a6b1603e195e5_24729721 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2 class="title">Le mie prenotazioni</h2>
<div class="container">
    Le prenotazioni in rosso sono quelle per cui è stata richiesta una disdetta che però deve ancora essere approvata
    dall'amministratore.
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bookings']->value, 'booking');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['booking']->value) {
?>
    <?php if ($_smarty_tpl->tpl_vars['booking']->value->valid == 1) {?>
    <div class="card ">
        <?php } elseif ($_smarty_tpl->tpl_vars['booking']->value->valid == 0) {?>
        <div class="booking-card not-valid" data-toggle="tooltip"
             title="La disdetta deve ancora essere approva dall'amministratore!">
            <?php }?>

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
