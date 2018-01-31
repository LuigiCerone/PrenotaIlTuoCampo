<?php
/* Smarty version 3.1.30, created on 2018-01-31 16:14:33
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminTournaments.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a71dd59aee874_86354010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce3c71ca7fc5733be3d9597cfb57444a365e7293' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminTournaments.tpl',
      1 => 1517411599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a71dd59aee874_86354010 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12639993615a71dd59acc660_98560906', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10623906885a71dd59acff75_61151266', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21338937915a71dd59aed6e7_55697521', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_12639993615a71dd59acc660_98560906 extends Smarty_Internal_Block
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
class Block_10623906885a71dd59acff75_61151266 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/datatables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/projectScript/adminTournaments.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_21338937915a71dd59aed6e7_55697521 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">Gestione dei tornei.</h2>
    <br>
    
    <br>
    <section>
        <div class="container">
            Se il numero di posti disponibili è terminato è possibile creare il calendario delle partite del torneo
            facendo click sulla riga del torneo. <br>
            <hr>
            <br>
            <table id="tournamentsTable">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Sport</td>
                    <td>Giocatori per squadra</td>
                    <td>Numero squadre</td>
                    <td>Posti disponbili</td>
                    <td>Data inizio</td>
                    <td>Data fine iscrizioni</td>
                    <td>Azienda</td>
                    <td>Telefono</td>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tournaments']->value, 'tournament');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tournament']->value) {
?>
                <tr class="<?php if ($_smarty_tpl->tpl_vars['tournament']->value->teamLeft == 0) {?>pending<?php }?>">
                    <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->id;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->tournament;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->sport;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->number_players;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->teamNumber;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->teamLeft;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->startDate;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->endSubscription;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->partner;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->telnumber;?>
</td>
                </tr>
                </tbody>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </table>
        </div>
    </section>
    <!-- Modal1 -->
    <div class="modal fade" id="scheduleCalendar" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Creazione calendario </h3>
                        Creazione del calendario associato al torneo in corso, attendi.....
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
