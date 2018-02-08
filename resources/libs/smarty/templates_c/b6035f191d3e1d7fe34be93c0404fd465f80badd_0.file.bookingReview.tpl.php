<?php
/* Smarty version 3.1.30, created on 2018-02-07 11:52:18
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/bookingReview.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7ada625190f3_33292054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6035f191d3e1d7fe34be93c0404fd465f80badd' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/bookingReview.tpl',
      1 => 1517932811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a7ada625190f3_33292054 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17566565905a7ada624e35e2_89718027', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16364471595a7ada624e5fc1_97262739', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14721569485a7ada62517820_31196691', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_17566565905a7ada624e35e2_89718027 extends Smarty_Internal_Block
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
class Block_16364471595a7ada624e5fc1_97262739 extends Smarty_Internal_Block
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
class Block_14721569485a7ada62517820_31196691 extends Smarty_Internal_Block
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
        <?php if (isset($_smarty_tpl->tpl_vars['supplies']->value)) {?>
            La struttura selezionata mette a dispozione per i clienti:
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supplies']->value, 'supply');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['supply']->value) {
?>
                    <li><b>Nome:</b><?php echo $_smarty_tpl->tpl_vars['supply']->value->name;
if (isset($_smarty_tpl->tpl_vars['supply']->value->description)) {?> ,
                            <b>Descrizione:</b>
                            <?php echo $_smarty_tpl->tpl_vars['supply']->value->description;
}?></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
            <hr>
        <?php }?>
        Nel giorno e nella data selezionata la struttura dispone dei seguenti campi:
        <form id="fieldSelect">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
                <div class="radio">
                    <label><input type="radio" name="field_radio" required
                                  value="<?php echo $_smarty_tpl->tpl_vars['field']->value->id;?>
"/>Numero: <?php echo $_smarty_tpl->tpl_vars['field']->value->number;?>
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
                        <button id="cancel" type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- The actual snackbar -->
    <div id="snackbar">Hai invitato questo giocatore!</div>
<?php
}
}
/* {/block "content"} */
}
