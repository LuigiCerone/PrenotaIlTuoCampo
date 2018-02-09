<?php
/* Smarty version 3.1.30, created on 2018-02-09 16:37:37
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/repeatLastBookings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7dc041ddfa53_24273906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32ae9b76a9f0593d09dfa3021428b1dc9f1b8cb6' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/repeatLastBookings.tpl',
      1 => 1518190655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a7dc041ddfa53_24273906 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5177344685a7dc041dd2e90_07604534', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4247436685a7dc041dd5425_58326673', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10227160745a7dc041ddec92_82857707', "content");
?>



<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_5177344685a7dc041dd2e90_07604534 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="public/css/jquery.timepicker.min.css"/>
<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_4247436685a7dc041dd5425_58326673 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/jquery.timepicker.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/projectScript/repeatLastBookings.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_10227160745a7dc041ddec92_82857707 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2 class="title">Prenotazioni recenti</h2>
<div class="container">
    Di seguito è presente una lista delle tue ultime prenotazioni.<br>
    Per ripetere una prenotazione è necessario selezionarla dalla lista e poi inserire data ed ora desiderati.<br>

    <table id="bookings">
        <thead>
        <tr>
            <td>ID</td>
            <td>Data</td>
            <td>Ora</td>
            <td>Struttura</td>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bookings']->value, 'booking');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['booking']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['booking']->value->id;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['booking']->value->date;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['booking']->value->time;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['booking']->value->name;?>
</td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tbody>
    </table>
    <hr>
    <form id="form" class="mod2">
        <div class="row">
            <div class="col-md-4">
                <div class=" w3l-left-mk">
                    <ul>
                        <li class="text">Prenotazione :</li>
                        <li class="agileits-main"><i class="fa fa-book profile-item" aria-hidden="true"></i><input
                                    type="text" value="" id="booking"
                                    placeholder="Prenotazione da ripetere" required/>

                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-6 col-xs-6 w3l-left-mk">
                    <ul>
                        <li class="text">Data</li>
                        <li class="agileits-main"><i class="fa fa-calendar" aria-hidden="true"></i><input
                                    class="date" id="datepicker" placeholder="Data" name="date" type="text"
                                    value=""
                                    required/>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-xs-6 w3l-left-mk">
                    <ul>
                        <li class="text">Ora :</li>
                        <li class="agileits-main"><i class="fa fa-clock-o" aria-hidden="true"></i><input
                                    class="date" placeholder="Ora" name="time" id="timepicker" type="text"
                                    value=""
                                    required/>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-center-block">
                <input type="submit" class="signin-button" id="saveBooking" value="Prenota"/>
            </div>
        </div>
    </form>
    <?php
}
}
/* {/block "content"} */
}
