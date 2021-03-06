<?php
/* Smarty version 3.1.30, created on 2018-02-08 12:02:26
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminPartners.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7c2e421ea702_41439837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29bab6b896493f7b256ea98fd921b9e71f5afdd0' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminPartners.tpl',
      1 => 1518087743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a7c2e421ea702_41439837 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18399988915a7c2e4219cfc9_44868029', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11801102255a7c2e4219f845_16779882', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18676048925a7c2e421e8dd5_06147494', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_18399988915a7c2e4219cfc9_44868029 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_11801102255a7c2e4219f845_16779882 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/projectScript/adminPartners.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_18676048925a7c2e421e8dd5_06147494 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (isset($_SESSION['admin']) && !isset($_SESSION['moderator'])) {?>
        <h2 class="title">I nostri principali partners.</h2>
        <br>
        
        <br>
        <section>
            <div class="container">
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
                        <td>Modifica campo</td>
                        <td>Modifica oggetti disponibili</td>
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
                            <td></td>
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
        <div class="row" id="post-review-box">
        <div class="signin-form profile">
            <h3 class="agileinfo_sign">Inserisci nuova azienda</h3>
            <div class="login-form">
                <div class="col-md-6 col-center-block">
                    <form id="savePartners" accept-charset="UTF-8" action="" method="post">
                        <input type="text" class="form-control" id="partenersText"
                               placeholder="Inserisci qui il nome dell'azienda" required/>
                        <input type="text" class="form-control" id="descriptionText"
                               placeholder="Inserisci qui la descrizione " required/>
                        <input type="text" class="form-control" id="regionText"
                               placeholder="Inserisci qui la regione " required/>
                        <input type="text" class="form-control" id="areaText"
                               placeholder="Inserisci qui l'area " required/>
                        <input type="text" class="form-control" id="addressText"
                               placeholder="Inserisci qui l'indirizzo " required/>
                        <input type="email" class="form-control " id="emailText" name="comment"
                               placeholder="Inserisci qui l'email " required/>
                        <input type="text" class="form-control animated" id="numberText" name="comment"
                               placeholder="Inserisci qui il numero di telefono" required/>
                        <br>
                        <input type="submit" value="Salva"/>
                    </form>
                </div>
            </div>
        </div>
    <?php } elseif (isset($_SESSION['moderator']) && !isset($_SESSION['admin'])) {?>
        <h2 class="title">La tua azienda</h2>
        <br>
        <section>
            <div class="container">
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
                        <td>Modifica campo</td>
                        <td>Modifica oggetti disponibili</td>
                    </tr>
                    </thead>
                    <tbody>
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
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <hr>
                <br>
                
                <table id="fieldsTable">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Numero</td>
                        <td>Sport</td>
                        <td>Tipo</td>
                        <td>Esterno</td>
                        <td>Riscaldato</td>
                        <td>Provincia</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['field']->value->id;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['field']->value->number;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['field']->value->name;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['field']->value->type;?>
</td>
                            <td><?php if ($_smarty_tpl->tpl_vars['field']->value->outdoor == 1) {?>Si<?php } else { ?>No<?php }?></td>
                            <td><?php if ($_smarty_tpl->tpl_vars['field']->value->warmed == 1) {?>Si<?php } else { ?>No<?php }?></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['field']->value->province_fk;?>
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
    <?php }?>
    <!-- Modal1 -->
    <div class="modal fade" id="addField" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Aggiungi campo</h3>
                        <div class="login-form">
                            <form id="fieldAddForm" method="post">
                                Esterno:
                                <label class="radio-inline">
                                    <input type="radio" name="outdoor" value="1" required>Si
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="outdoor" value="0" required>No
                                </label>
                                <br>
                                Riscaldato:
                                <label class="radio-inline">
                                    <input type="radio" name="warmed" value="1" required>Si
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="warmed" value="0" required>No
                                </label>
                                <table>
                                    <tr>
                                        <td>Tipologia campo:</td>
                                        <td><input id="type" type="text" name="type" placeholder="Tipo campo"
                                                   required/></td>
                                    </tr>
                                    <tr>
                                        <td>Numero:</td>
                                        <td><input id="number" type="number"
                                                   name="number" class="form-control"
                                                   placeholder="Numero campo"
                                                   required/></td>
                                    </tr>
                                    <tr>
                                        <td>Provincia:</td>
                                        <td>
                                            <select class="form-control" id="province">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['provinces']->value, 'province');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['province']->value) {
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['province']->value->sign;?>
"><?php echo $_smarty_tpl->tpl_vars['province']->value->name;?>
</option>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sport:</td>
                                        <td><select class="form-control" id="selectSport">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sports']->value, 'sport');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sport']->value) {
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['sport']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['sport']->value->name;?>
</option>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            </select></td>
                                    </tr>
                                </table>
                                <input type="submit" value="Aggiungi">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal1 -->
    <div class="modal fade" id="modifyItems" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Modifica disponibilità</h3>
                        <div class="login-form">
                            <form id="resourceForm">
                                <fieldset>
                                    <legend>Seleziona ciò che l'azienda possiede</legend>
                                    <div id="checkboxes">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supplies']->value, 'supply');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['supply']->value) {
?>
                                            <div>
                                                <input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['supply']->value->id;?>
" name="supplies"
                                                       value="<?php echo $_smarty_tpl->tpl_vars['supply']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['supply']->value->available) {?> checked<?php }?>>
                                                <label for="<?php echo $_smarty_tpl->tpl_vars['supply']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['supply']->value->name;?>
</label>
                                            </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                    </div>
                                </fieldset>
                                <div class="row">
                                    <div class="col-md-5 col-center-block"><input type="submit" value="Salva"/>
                                    </div>
                                </div>
                            </form>
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
