<?php
/* Smarty version 3.1.30, created on 2018-01-27 16:09:59
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/bookingReview.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6c9647b12829_83628791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6035f191d3e1d7fe34be93c0404fd465f80badd' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/bookingReview.tpl',
      1 => 1517065796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a6c9647b12829_83628791 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14378595475a6c9647af5446_21365044', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5766691725a6c9647af7b33_41069994', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19965606145a6c9647b11863_80278975', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_14378595475a6c9647af5446_21365044 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_5766691725a6c9647af7b33_41069994 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/projectScript/bookingReview.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_19965606145a6c9647b11863_80278975 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">Conferma prenotazione</h2>
    <br>
    <div class="container">
        <?php if (($_SESSION['id'] != null)) {
}?>
        <h4><b>Riepilogo dati inseriti</b></h4>
        <table class="user-info">
            <tr>
                <td>Sport selezionato:</td>
                <td> <?php echo $_smarty_tpl->tpl_vars['booking']->value->sport;?>
</td>
            </tr>
            <tr>
                <td>Centro selezionato:</td>
                <td> <?php echo $_smarty_tpl->tpl_vars['booking']->value->partner;?>
</td>
            </tr>
            <tr>
                <td>Data selezionata:</td>
                <td> <?php echo $_smarty_tpl->tpl_vars['booking']->value->date;?>
</td>
            </tr>
            <tr>
                <td>Ora selezionata:</td>
                <td> <?php echo $_smarty_tpl->tpl_vars['booking']->value->time;?>
</td>
            </tr>
            <tr>
                <td>Provincia:</td>
                <td> <?php echo $_smarty_tpl->tpl_vars['booking']->value->province;?>
 <b>(<?php echo $_smarty_tpl->tpl_vars['booking']->value->selectedProvince;?>
)</b>
                </td>
            </tr>
        </table>
        <br>
        <hr>
        Nel giorno e nella data selezionata la struttura dispone dei seguenti campi:
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bookings']->value, 'booking');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['booking']->value) {
?>
            <div class="card ">
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
    </div>
    valore:
    <?php echo $_smarty_tpl->tpl_vars['booking']->value->selectedSport;?>

    <?php echo $_smarty_tpl->tpl_vars['booking']->value->selectedPartner;?>

    <!-- /banner -->
<?php
}
}
/* {/block "content"} */
}
