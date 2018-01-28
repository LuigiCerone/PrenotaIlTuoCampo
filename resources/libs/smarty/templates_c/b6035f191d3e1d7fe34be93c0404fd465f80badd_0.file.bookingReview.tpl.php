<?php
/* Smarty version 3.1.30, created on 2018-01-28 10:35:16
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/bookingReview.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6d9954913671_65892846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6035f191d3e1d7fe34be93c0404fd465f80badd' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/bookingReview.tpl',
      1 => 1517132112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a6d9954913671_65892846 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9039504275a6d99548f5938_66926545', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16793506425a6d99548f90e8_42413591', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17654294705a6d9954912890_96221772', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_9039504275a6d99548f5938_66926545 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_16793506425a6d99548f90e8_42413591 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/projectScript/bookingReview.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_17654294705a6d9954912890_96221772 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">Conferma prenotazione</h2>
    <br>
    <div class="container">
        <h4><b>Riepilogo dati inseriti</b></h4>
        <table class="user-info">
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
                <td> <?php echo $_smarty_tpl->tpl_vars['booking']->value->date;?>
</td>
            </tr>
            <tr>
                <td>Ora selezionata:</td>
                <td> <?php echo $_smarty_tpl->tpl_vars['booking']->value->time;?>
</td>
            </tr>
            <tr>
                <td>Provincia:</td>
                <td> <?php echo $_smarty_tpl->tpl_vars['booking']->value->province;?>
 <b>(<?php echo $_smarty_tpl->tpl_vars['booking']->value->selectedProvince;?>
)</b>
                </td>
            </tr>
        </table>
        <br>
        <hr>
        Non raggiungi la quota necessaria?
        <a href="#">Clicca qui se hai bisogno di altri giocatori!</a>
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
    </div>
    <!-- /banner -->
<?php
}
}
/* {/block "content"} */
}
