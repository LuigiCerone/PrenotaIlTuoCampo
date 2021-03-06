<?php
/* Smarty version 3.1.30, created on 2018-01-30 11:00:44
  from "C:\Users\dany\PhpstormProjects\PrenotaIlTuoCampo\resources\templates\bookingReview.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a70424cdde0b2_71949210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2c6e6dd1760695f7d11164057b91b6c1c56a671' => 
    array (
      0 => 'C:\\Users\\dany\\PhpstormProjects\\PrenotaIlTuoCampo\\resources\\templates\\bookingReview.tpl',
      1 => 1517306030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a70424cdde0b2_71949210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11593769075a70424cd8dbc7_31311817', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12235259055a70424cd8eea6_17078030', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16914101925a70424cddd834_85048899', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_11593769075a70424cd8dbc7_31311817 extends Smarty_Internal_Block
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
class Block_12235259055a70424cd8eea6_17078030 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/datatables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/projectScript/bookingReview.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_16914101925a70424cddd834_85048899 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">Conferma prenotazione</h2>
    <br>
    <div class="container">
        <h4><b>Riepilogo dati inseriti</b></h4>
        <table id="bookingData" class="user-info">
            <tr>
                <td>Sport selezionato:</td>
                <td> <?php echo $_smarty_tpl->tpl_vars['booking']->value->sport;?>
</td>
            </tr>
            <tr>
                <td>Centro selezionato:</td>
                <td> <?php echo $_smarty_tpl->tpl_vars['booking']->value->partner;?>
</td>
            </tr>
            <tr>
                <td>Data selezionata:</td>
                <td id="date"> <?php echo $_smarty_tpl->tpl_vars['booking']->value->date;?>
</td>
            </tr>
            <tr>
                <td>Ora selezionata:</td>
                <td id="time"> <?php echo $_smarty_tpl->tpl_vars['booking']->value->time;?>
</td>
            </tr>
            <tr>
                <td>Provincia:</td>
                <td> <?php echo $_smarty_tpl->tpl_vars['booking']->value->province;?>
 <b>(<?php echo $_smarty_tpl->tpl_vars['booking']->value->selectedProvince;?>
)</b>
                </td>
            </tr>
            <tr class="hidden">
                <td id="selectedSport"><?php echo $_smarty_tpl->tpl_vars['booking']->value->selectedSport;?>
</td>
                <td id="selectedPartner"><?php echo $_smarty_tpl->tpl_vars['booking']->value->selectedPartner;?>
</td>
            </tr>
        </table>
        <br>
        <hr>
        Non raggiungi la quota necessaria?
        <a id="openFinder" data-toggle="modal" href="#findPlayers">Clicca qui se hai bisogno di altri giocatori!</a>
        <hr>
        Nel giorno e nella data selezionata la struttura dispone dei seguenti campi:
        <form id="fieldSelect">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
                <div class="radio">
                    <label><input type="radio" name="field_radio" required/>Numero: <?php echo $_smarty_tpl->tpl_vars['field']->value->id;?>
, tipo: <?php echo $_smarty_tpl->tpl_vars['field']->value->type;?>
,
                        esterno: <?php if ($_smarty_tpl->tpl_vars['field']->value->outdoor == 1) {?>Si <?php } else { ?>No <?php }?>,
                        riscaldato: <?php if ($_smarty_tpl->tpl_vars['field']->value->warmed == 1) {?>Si <?php } else { ?>No <?php }?></label>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <?php if (($_SESSION['id'] != null)) {?>
            <div class="agile-submit">
                <input type="submit" id="submit" value="Conferma"/>
            </div>

            <?php } else { ?>
            <div class="agile-submit disabled">
                <input disabled type="submit" id="submit" value="Conferma" data-toggle="tooltip"
                       title="Accedi o registrati!"/>
                <br>
                Ricorda che per effetturare la prenotazione devi essere registrato!
                <?php }?>
            </div>
        </form>

    </div>
    <!-- Modal -->
    <div class="modal fade" id="findPlayers" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="agileinfo_sign">Cerca giocatori</h3>
                    In questa pagina può contattare altri giocatori per unirsi alla tua squadra!
                    <br><br>
                    Di seguito una lista con tutte le persone che si sono offerte disponibili
                    per giocare a <?php echo $_smarty_tpl->tpl_vars['booking']->value->sport;?>
 il <?php echo $_smarty_tpl->tpl_vars['booking']->value->date;?>
 alle ore <?php echo $_smarty_tpl->tpl_vars['booking']->value->time;?>

                    presso <?php echo $_smarty_tpl->tpl_vars['booking']->value->partner;?>
:<br><br>
                    <span id="error"></span>
                    <br>
                    <table id="findPlayerTable">
                    </table>
                    <div class="modal-footer">
                        <button id="saveSearch" type="button" class="btn btn-primary">Fatto</button>
                        <button id="cancel" type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi
                        </button>
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
