<?php
/* Smarty version 3.1.30, created on 2018-02-03 16:31:13
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminBookings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a75d5c1e79051_84787877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac3c788fb111662a9a11f1e9104cb55b5cc9b369' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminBookings.tpl',
      1 => 1517671867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a75d5c1e79051_84787877 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17035086505a75d5c1e5f897_01330207', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_331090275a75d5c1e64827_78475985', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20788433895a75d5c1e77fd0_46235959', "content");
?>



<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_17035086505a75d5c1e5f897_01330207 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_331090275a75d5c1e64827_78475985 extends Smarty_Internal_Block
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
class Block_20788433895a75d5c1e77fd0_46235959 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <h3 class="title">Prenotazioni per cui è stata richeista una disdetta </h3>
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
