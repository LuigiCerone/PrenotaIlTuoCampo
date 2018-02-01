<?php
/* Smarty version 3.1.30, created on 2018-02-01 16:31:13
  from "C:\Users\dany\PhpstormProjects\PrenotaIlTuoCampo\resources\templates\adminTournaments.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7332c1429438_98745726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bec9f8a3f4e450c300827160f653ebfb12763940' => 
    array (
      0 => 'C:\\Users\\dany\\PhpstormProjects\\PrenotaIlTuoCampo\\resources\\templates\\adminTournaments.tpl',
      1 => 1517498172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a7332c1429438_98745726 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16465800955a7332c140d486_84240329', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4528244455a7332c140ea08_92597165', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7612069875a7332c14289d4_89404446', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_16465800955a7332c140d486_84240329 extends Smarty_Internal_Block
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
class Block_4528244455a7332c140ea08_92597165 extends Smarty_Internal_Block
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
class Block_7612069875a7332c14289d4_89404446 extends Smarty_Internal_Block
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
                    <td>Partite</td>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tournaments']->value, 'tournament');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tournament']->value) {
?>
                    <tr class="<?php if ($_smarty_tpl->tpl_vars['tournament']->value->teamLeft == 0 && $_smarty_tpl->tpl_vars['tournament']->value->scheduled == 0) {?>pending<?php }?>">
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
                        <img src='public/images/loading.webp'/>
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
