<?php
/* Smarty version 3.1.30, created on 2018-01-28 15:36:16
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/availability.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6ddfe09704d2_62695055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6181566b994b70554fabb6ce357d9635ced0680b' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/availability.tpl',
      1 => 1517150161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a6ddfe09704d2_62695055 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8681901385a6ddfe0962176_66993997', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16214902595a6ddfe0964851_21861022', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1293995515a6ddfe096f969_68759967', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_8681901385a6ddfe0962176_66993997 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_16214902595a6ddfe0964851_21861022 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/projectScript/availability.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_1293995515a6ddfe096f969_68759967 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <br>
        <h2 class="text-center">Le mie disponibilità</h2>
        <br>
        Di seguito è presente la lista delle disponibilità che hai dato, per rimuoverne una fai click sull'icona, per
        aggiungere altre disponibilità <a data-toggle="modal" href="#addAvailability">clicca qui</a>.<br><br>
        <hr>
        <br>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['availabilities']->value, 'availability');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['availability']->value) {
?>
            <div class="card ">
                <div class="row ">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6">
                        <div class="card-block">
                            <h4 class="card-title">Dispobilità per il <?php echo $_smarty_tpl->tpl_vars['availability']->value->date;?>

                                alle <?php echo $_smarty_tpl->tpl_vars['availability']->value->time;?>
</h4>
                            <p class="card-text">Ti sei reso disponibile per giocare a <b><?php echo $_smarty_tpl->tpl_vars['availability']->value->sport;?>
</b></p>
                            <p class="card-text">Presso <b><?php echo $_smarty_tpl->tpl_vars['availability']->value->partner;?>
</b></p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <i data-id="<?php echo $_smarty_tpl->tpl_vars['availability']->value->id;?>
" class="fa fa-trash delete" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
    <!-- Modal -->
    <div class="modal fade" id="addAvailability" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <form id="form" class="mod2">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="agileinfo_sign">Aggiungi disponilità</h3>
                        In questa pagina può aggiungere giorni in cui sei disponibile a giocare cosi che gli altri
                        giocatori, in caso di necessità, possano contattarti!<br>
                        <hr>
                        <br>

                        <div class="col-md-6 col-xs-6 w3l-left-mk">
                            <ul>
                                <li class="text">Sport :</li>
                                <li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i>
                                    <input id="sport" name="sport" type="text" class="typeahead"
                                           placeholder="Sport" required/>
                                </li>
                                <li class="text">Provincia :</li>
                                <li class="agileits-main"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <input id="province" placeholder="Provincia" name="province" type="text" required
                                           class='typeahead'/></li>
                                <li class="text">Data :</li>
                                <li class="agileits-main"><i class="fa fa-calendar" aria-hidden="true"></i><input
                                            class="date" id="datepicker" placeholder="Data" name="date" type="text"
                                            value=""
                                            required/>
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-6 col-xs-6 w3l-right-mk">
                            <ul>
                                <li class="text">qualcosa di utile qui :</li>
                                <li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i><input
                                            name="gender" type="text"/></li>
                                <li class="text">Struttura :</li>
                                <li class="agileits-main"><i class="fa fa-home" aria-hidden="true"></i><input
                                            id="partner" name="partner" placeholder="Struttura" class="typeahead"
                                            type="text" required/>
                                </li>
                                <li class="text">Ora :</li>
                                <li class="agileits-main"><i class="fa fa-clock-o" aria-hidden="true"></i><input
                                            class="date" placeholder="Ora" name="time" id="timepicker" type="text"
                                            value=""
                                            required/>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <input class="hidden" id="selectedSport" name="selectedSport"/>
                        <input class="hidden" id="selectedPartner" name="selectedPartner"/>
                        <input class="hidden" id="selectedProvince" name="selectedProvince"/>


                        <span id="error"></span>
                        <div class="modal-footer">
                            <input id="saveAvailability" type="submit" class="btn btn-primary" value="Fatto"/>
                            <button id="cancel" type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Confirm Modal -->
    <div class="modal fade" id="removeAvailability" tabindex="-1" role="dialog">
        <div class="modal-dialog change_pass">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="agileinfo_sign">Anullamento disponibilità</h3>
                    Sei sicuro di voler rimuove la disponibilità?
                    <span id="error"></span>
                    <div class="modal-footer">
                        <button id="saveChange" type="button" class="btn btn-primary">Si, disdici</button>
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
