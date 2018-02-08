<?php
/* Smarty version 3.1.30, created on 2018-02-01 12:55:29
  from "C:\Users\dany\PhpstormProjects\PrenotaIlTuoCampo\resources\templates\adminBookings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7300319ce8e9_49173175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc771ff224b073867ae0fdec9c5b878041512b9a' => 
    array (
      0 => 'C:\\Users\\dany\\PhpstormProjects\\PrenotaIlTuoCampo\\resources\\templates\\adminBookings.tpl',
      1 => 1517486128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a7300319ce8e9_49173175 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1515642835a7300319ae433_41563403', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1820822905a7300319b0ea7_68160761', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3421537305a7300319cd909_61695665', "content");
?>



<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_1515642835a7300319ae433_41563403 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_1820822905a7300319b0ea7_68160761 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/projectScript/adminBookings.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_3421537305a7300319cd909_61695665 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2 class="title">Prenotazioni da disdire </h2>
<div class="container">
    
    
    <div class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bookings']->value, 'booking');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['booking']->value) {
?>
    <?php if ($_smarty_tpl->tpl_vars['booking']->value->valid == 0) {?>
    <div class="card ">
        
        
             
            <?php }?>

            <div class="row ">
                <div class="col-md-3">
                </div>
                <div class="col-md-1">
                    <img src="public/images/booking.png" class="booking-img rounded-circle"/>
                </div>
                <div class="col-md-6">
                    <div class="card-block">
                        <h4 class="card-title">Prenotazione numero <?php echo $_smarty_tpl->tpl_vars['booking']->value->id;?>
 dell'utente <?php echo $_smarty_tpl->tpl_vars['booking']->value->user_fk;?>
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
        
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>

    
    
        
            
            
                
                    
                    
                    
                    
                    
                        
                        
                        
                    
                
            
        
    
    <?php
}
}
/* {/block "content"} */
}
