<?php
/* Smarty version 3.1.30, created on 2018-02-02 15:49:56
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminPartners.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a747a9459ec07_78690882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29bab6b896493f7b256ea98fd921b9e71f5afdd0' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminPartners.tpl',
      1 => 1517582370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a747a9459ec07_78690882 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16184971005a747a94579ea4_21805938', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18049932005a747a9457e245_80609526', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3531215495a747a9459dc82_14023552', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_16184971005a747a94579ea4_21805938 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_18049932005a747a9457e245_80609526 extends Smarty_Internal_Block
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
class Block_3531215495a747a9459dc82_14023552 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
    <?php if (($_SESSION['id'] != null)) {?>
        <span class="hidden" id="id"><?php echo $_SESSION['id'];?>
</span>
        <div class="row" id="post-review-box">
        <div class="signin-form profile">
            <h3 class="agileinfo_sign">Inserisci nuova azienda</h3>
            <div class="login-form">
                <div class="col-md-6 col-center-block">
                    <form accept-charset="UTF-8" action="" method="post">
                        <input type="text" class="form-control" id="partenersText"
                               placeholder="Inserisci qui il nome dell'azienda"/>
                        <input type="text" class="form-control" id="descriptionText"
                               placeholder="Inserisci qui la descrizione "/>
                        <input type="text" class="form-control" id="regionText"
                               placeholder="Inserisci qui la regione "/>
                        <input type="text" class="form-control" id="areaText"
                               placeholder="Inserisci qui l'area "/>
                        <input type="text" class="form-control" id="addressText"
                               placeholder="Inserisci qui l'indirizzo "/>
                        <input type="email" class="form-control " id="emailText" name="comment"
                               placeholder="Inserisci qui l'email "/>
                        <input type="text" class="form-control animated" id="numberText" name="comment"
                               placeholder="Inserisci qui il numero di telefono"/>
                        <br>
                        <input id="savePartners" type="submit" value="Salva"/>
                    </form>
                </div>
            </div>
        </div>
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
                                                       name="number"
                                                       placeholder="Numero campo"
                                                       required/></td>
                                        </tr>
                                        <tr>
                                            <td>Provincia:</td>
                                            <td><input id="province" type="text" name="province"
                                                       placeholder="Sigla provincia"
                                                       maxlength="2"
                                                       required/></td>
                                        </tr>
                                        <tr>
                                            <td>Sport:</td>
                                            <td><select id="selectSport">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }
}
}
/* {/block "content"} */
}
