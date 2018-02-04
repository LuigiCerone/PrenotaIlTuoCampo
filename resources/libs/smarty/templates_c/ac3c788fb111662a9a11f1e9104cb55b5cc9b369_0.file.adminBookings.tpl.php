<?php
/* Smarty version 3.1.30, created on 2018-02-04 11:42:08
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminBookings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a76e380ad08e8_80216305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac3c788fb111662a9a11f1e9104cb55b5cc9b369' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminBookings.tpl',
      1 => 1517679933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a76e380ad08e8_80216305 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3332459875a76e380ab8970_78846566', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_292260975a76e380abb248_61716809', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5807367855a76e380acf721_61496228', "content");
?>



<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_3332459875a76e380ab8970_78846566 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_292260975a76e380abb248_61716809 extends Smarty_Internal_Block
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
class Block_5807367855a76e380acf721_61496228 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <h3 class="title">Prenotazioni per cui è stata richiesta una disdetta </h3>
        <table id="notValidBookingTable">
            <thead>
            <tr>
                <td>ID</td>
                <td>Data</td>
                <td>Ora</td>
                <td>Dati persona</td>
                <td>Approva disdetta</td>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notValidBookings']->value, 'notValid');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notValid']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['notValid']->value->id;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['notValid']->value->date;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['notValid']->value->time;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['notValid']->value->firstName;?>
 <?php echo $_smarty_tpl->tpl_vars['notValid']->value->lastName;?>
</td>
                    <td></td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tbody>
        </table>

        <br>
        <hr>
        <br>
        <h3 class="title">Prenotazioni da approvare </h3>
        <table id="notApprovedBookingTable">
            <thead>
            <tr>
                <td>ID</td>
                <td>Data</td>
                <td>Ora</td>
                <td>Dati persona</td>
                <td>Approva prenotazione</td>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notApprovedBookings']->value, 'notApproved');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notApproved']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['notApproved']->value->id;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['notApproved']->value->date;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['notApproved']->value->time;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['notApproved']->value->firstName;?>
 <?php echo $_smarty_tpl->tpl_vars['notApproved']->value->lastName;?>
</td>
                    <td></td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tbody>
        </table>
    </div>
<?php
}
}
/* {/block "content"} */
}
