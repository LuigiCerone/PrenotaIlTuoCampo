<?php
/* Smarty version 3.1.30, created on 2018-02-08 18:18:21
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminAccounts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7c865dca0d82_31215852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9f860552b8c05a60d84b9636b103d5a2fd97af3' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminAccounts.tpl',
      1 => 1518110297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a7c865dca0d82_31215852 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16400059135a7c865dc86d39_04825144', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4407792645a7c865dc89675_71926078', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11706514845a7c865dc9ffa1_98718949', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_16400059135a7c865dc86d39_04825144 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_4407792645a7c865dc89675_71926078 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/projectScript/adminAccounts.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_11706514845a7c865dc9ffa1_98718949 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">Inseirimento moderatori per aziende</h2>
    <br>
    <section>
        <div class="container">
            Selezionare l'azienda e l'utente a cui si vogliono dare i diritti di gestione.
            <table id="partnersTable">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Descrizione</td>
                    <td>Regione</td>
                    <td>Area</td>
                    <td>Indirizzo</td>
                    <td>Email</td>
                    <td>Telefono</td>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['partners']->value, 'partner');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['partner']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['partner']->value->id;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['partner']->value->name;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['partner']->value->description;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['partner']->value->region;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['partner']->value->area;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['partner']->value->address;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['partner']->value->email;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['partner']->value->telnumber;?>
</td>
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
            <table id="usersTable">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Cognome</td>
                    <td>Email</td>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value->firstName;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value->lastName;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
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
    </section>
    <div class="row">
        <div class="col-center-block col-md-3">
            <button class="signin-button" id="addModerator">Salva</button>
        </div>
    </div>
    <!-- Modal1 -->
    <div class="modal fade" id="addModeratorModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Aggiungi campo</h3>
                        <div class="login-form">
                            Stai per assegnare all'utente <b><span id="user"></span></b> i diritti di gestione
                            sull'azienda
                            <b><span id="partner"></span></b>.
                            Sei sicuro?
                        </div>
                        <div class="modal-footer">
                            <button id="save" type="button" class="btn btn-primary">Si</button>
                            <button id="cancel" type="button" class="btn btn-secondary" data-dismiss="modal">Annulla
                            </button>
                        </div>
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
