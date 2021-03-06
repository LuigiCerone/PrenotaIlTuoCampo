<?php
/* Smarty version 3.1.30, created on 2018-02-12 11:47:55
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/invitations.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a8170db735342_03354977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e06fdc8d7a11ac3023979db2dc7658b3f42ba7a6' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/invitations.tpl',
      1 => 1518432473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a8170db735342_03354977 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17551688415a8170db6fe779_17087477', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9466360675a8170db700e24_71768255', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7243331055a8170db733cf3_86522738', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_17551688415a8170db6fe779_17087477 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_9466360675a8170db700e24_71768255 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/projectScript/invitations.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_7243331055a8170db733cf3_86522738 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <h2 class="title">I miei inviti</h2>
        <ul class="nav nav-tabs nav-justified">
            <li class="active"><a id="received" data-toggle="tab">Ricevuti</a></li>
            <li><a id="sent" data-toggle="tab">Inviati</a></li>
        </ul>
        <br>
        <div id="receivedInvitations">
            Di seguito è presente la lista degli inviti ricevuti da parte di altri utenti.
            Per <b>accettare</b> o per <b>rifiutare</b> un invito clicca sulla riga della tabella il cui stato corrent è
            <b>in attesa</b>.
            <br><br>
            <table id="receivedTable" width="100%">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Disponibilità</td>
                    <td>Ultima modifica</td>
                    <td>Stato</td>
                    <td>Inviato da</td>
                    <td>Email</td>
                    <td>Telefono</td>
                    <td>Sport</td>
                    <td>Data,ora</td>
                    <td>Luogo</td>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['receivedInvitations']->value, 'received');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['received']->value) {
?>
                    <tr class="<?php if ($_smarty_tpl->tpl_vars['received']->value->status == 2) {?>pending<?php }?>">
                        <td><?php echo $_smarty_tpl->tpl_vars['received']->value->id;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['received']->value->availabilityId;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['received']->value->invitationDate;?>
</td>
                        <td><?php if ($_smarty_tpl->tpl_vars['received']->value->status == 1) {?>Accettato <?php } elseif ($_smarty_tpl->tpl_vars['received']->value->status == 0) {?>Rifiutato <?php } else { ?> In attesa<?php }?></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['received']->value->firstName;?>
 <?php echo $_smarty_tpl->tpl_vars['received']->value->lastName;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['received']->value->email;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['received']->value->telnumber;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['received']->value->sport;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['received']->value->date;?>
 <?php echo $_smarty_tpl->tpl_vars['received']->value->time;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['received']->value->partner;?>
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
            <table id="sentTable" width="100%">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Data invito</td>
                    <td>Stato</td>
                    <td>Inviato a</td>
                    <td>Email</td>
                    <td>Telefono</td>
                    <td>Sport</td>
                    <td>Data,ora</td>
                    <td>Luogo</td>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['sent']->value->invitationDate;?>
</td>
                        <td><?php if ($_smarty_tpl->tpl_vars['sent']->value->status == 0) {?>Rifiutato <?php } elseif ($_smarty_tpl->tpl_vars['sent']->value->status == 1) {?> Accettato <?php } else { ?> In attesa<?php }?></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['sent']->value->firstName;?>
 <?php echo $_smarty_tpl->tpl_vars['sent']->value->lastName;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['sent']->value->email;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['sent']->value->telnumber;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['sent']->value->sport;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['sent']->value->date;?>
 <?php echo $_smarty_tpl->tpl_vars['sent']->value->time;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['sent']->value->partner;?>
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
    <!-- Modal1 -->
    <div class="modal fade" id="changeStatus" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Accetta o rifiuta invito</h3>
                        Fare click su uno dei seguenti pulsanti per decidere se accettare o se declinare l'invito
                        ricevuto.
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="accept" type="button" class="btn btn-primary">Accetta</button>
                    <button id="decline" type="button" class="btn btn-secondary" data-dismiss="modal">Rifiuta
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
