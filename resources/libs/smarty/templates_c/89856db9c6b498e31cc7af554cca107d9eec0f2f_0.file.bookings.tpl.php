<?php
/* Smarty version 3.1.30, created on 2018-01-26 10:32:34
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/bookings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6af5b2c68fc8_51006777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89856db9c6b498e31cc7af554cca107d9eec0f2f' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/bookings.tpl',
      1 => 1516959152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a6af5b2c68fc8_51006777 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5540470445a6af5b2c54009_19153374', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19461933245a6af5b2c577c1_50779893', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4626070485a6af5b2c65b51_94042584', "content");
?>













<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_5540470445a6af5b2c54009_19153374 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_19461933245a6af5b2c577c1_50779893 extends Smarty_Internal_Block
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
class Block_4626070485a6af5b2c65b51_94042584 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">Le mie prenotazioni</h2>
    <div class="container">
        <div class="col-center-block">
            
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
                            <i class="fa fa-trash" aria-hidden="true"></i>
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
    </div>
    <!-- /banner -->
<?php
}
}
/* {/block "content"} */
}
