<?php
/* Smarty version 3.1.30, created on 2018-01-29 20:03:29
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/invitations.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6f700161bb76_83352571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e06fdc8d7a11ac3023979db2dc7658b3f42ba7a6' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/invitations.tpl',
      1 => 1517252606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a6f700161bb76_83352571 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10727957625a6f70015f7d27_73920500', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3063042725a6f70015fc525_78648860', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20398835465a6f700161ad60_37228518', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_10727957625a6f70015f7d27_73920500 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="public/css/datatables.min.css"/>
<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_3063042725a6f70015fc525_78648860 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/datatables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/projectScript/invitations.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_20398835465a6f700161ad60_37228518 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <h2 class="title">I miei inviti</h2>
        <ul class="nav nav-tabs nav-justified">
            <li class="active"><a id="received">Ricevuti</a></li>
            <li><a id="sent">Inviati</a></li>
        </ul>

        <div id="receivedInvitations">
            Di seguito è presente la lista degli inviti ricevuti da parte di altri utenti:
            <table id="receivedTable">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Data</td>
                    <td>Stato</td>
                    <td>Nome</td>
                    <td>Cognome</td>
                    <td>Email</td>
                    <td>Telefono</td>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['receivedInvitations']->value, 'received');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['received']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['received']->value->id;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['received']->value->date;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['received']->value->accepted;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['received']->value->firstName;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['received']->value->lastName;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['received']->value->email;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['received']->value->telnumber;?>
</td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </tbody>
            </table>
        </div>
        <div id="sentInvitations">
            Di seguito è presente la lista degli inviti inviati ad altri utenti:
            <table id="sentTable">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Data</td>
                    <td>Stato</td>
                    <td>Nome</td>
                    <td>Cognome</td>
                    <td>Email</td>
                    <td>Telefono</td>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sentInvitations']->value, 'sent');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sent']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['sent']->value->id;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['sent']->value->date;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['sent']->value->accepted;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['sent']->value->firstName;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['sent']->value->lastName;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['sent']->value->email;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['sent']->value->telnumber;?>
</td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </tbody>
            </table>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
