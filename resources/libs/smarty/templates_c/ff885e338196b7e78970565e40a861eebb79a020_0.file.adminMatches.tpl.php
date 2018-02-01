<?php
/* Smarty version 3.1.30, created on 2018-02-01 12:13:20
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminMatches.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a72f650ba4d82_05962288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff885e338196b7e78970565e40a861eebb79a020' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminMatches.tpl',
      1 => 1517483548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a72f650ba4d82_05962288 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10724160535a72f650b6f7e2_48421720', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15525622855a72f650b75816_13112009', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15420210835a72f650ba3b43_63024111', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_10724160535a72f650b6f7e2_48421720 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="public/css/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="public/css/buttons.dataTables.min.css"/>
<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_15525622855a72f650b75816_13112009 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="public/js/JSZip-2.5.0/jszip.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="public/js/pdfmake-0.1.32/pdfmake.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="public/js/pdfmake-0.1.32/vfs_fonts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="public/js/datatables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="public/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="public/js/buttons.html5.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/projectScript/adminMatches.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_15420210835a72f650ba3b43_63024111 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">Gestione delle partite associate ad un torneo.</h2>
    <br>
    
    <br>
    <section>
        <div class="container">
            Informazioni relative al torneo <?php echo $_smarty_tpl->tpl_vars['tournament']->value->tournament;?>
. Fare click sulla riga della tabella per
            modificare.
            <br>
            <hr>
            <br>
            <ul id="tabs" class="nav nav-tabs">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['days']->value, 'day');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
?>
                    <li class="nav-item">
                        <a data-toggle="tab" class="nav-link"
                           href="#table_<?php echo $_smarty_tpl->tpl_vars['day']->value[0]->day;?>
">Giornata <?php echo $_smarty_tpl->tpl_vars['day']->value[0]->day+1;?>

                        </a>
                    </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                <br>

                <div class="tab-content">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['days']->value, 'day');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
?>
                        <div class="tab-pane" id="table_<?php echo $_smarty_tpl->tpl_vars['day']->value[0]->day;?>
">
                            <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Giornata</td>
                                    <td>Squadra casa</td>
                                    <td>Squadra ospite</td>
                                    <td>Data</td>
                                    <td>Ora</td>
                                    <td>Azienda</td>
                                    <td>Campo</td>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['day']->value, 'match');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['match']->value) {
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['match']->value->match_id;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['match']->value->day+1;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['match']->value->first_team;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['match']->value->second_team;?>
</td>
                                        <td><?php if ($_smarty_tpl->tpl_vars['match']->value->date == null) {?> - <?php } else {
echo $_smarty_tpl->tpl_vars['match']->value->date;
}?></td>
                                        <td><?php if ($_smarty_tpl->tpl_vars['match']->value->time == null) {?> - <?php } else {
echo $_smarty_tpl->tpl_vars['match']->value->time;
}?></td>
                                        <td><?php if ($_smarty_tpl->tpl_vars['match']->value->partner == null) {?> - <?php } else {
echo $_smarty_tpl->tpl_vars['match']->value->partner;
}?></td>
                                        <td><?php if ($_smarty_tpl->tpl_vars['match']->value->number == null) {?> - <?php } else {
echo $_smarty_tpl->tpl_vars['match']->value->number;
}?></td>
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
        </div>
    </section>
    <!-- Modal1 -->
    <div class="modal fade" id="modifyMatch" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Modifica dati partita </h3>
                        INSERIRE INPUT PER DATA, ORA , RISULTATO.
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="save" type="button" class="btn btn-primary">Salva</button>
                    <button id="cancel" type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi
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
