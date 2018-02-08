<?php
/* Smarty version 3.1.30, created on 2018-02-03 17:11:41
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/availability.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a75df3dc1bca4_94384878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6181566b994b70554fabb6ce357d9635ced0680b' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/availability.tpl',
      1 => 1517655225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a75df3dc1bca4_94384878 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14537475285a75df3dc09312_60417791', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4233159675a75df3dc0bb20_44206389', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11915160085a75df3dc1afc6_77326182', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_14537475285a75df3dc09312_60417791 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link href="public/css/jquery.timepicker.min.css" rel="stylesheet"/>
<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_4233159675a75df3dc0bb20_44206389 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/jquery.timepicker.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/bootstrap3-typeahead.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/projectScript/availability.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_11915160085a75df3dc1afc6_77326182 extends Smarty_Internal_Block
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

                                <?php if ($_smarty_tpl->tpl_vars['availability']->value->time == null) {?> tutto il giorno<?php } else { ?>
                                    alle <?php echo $_smarty_tpl->tpl_vars['availability']->value->time;
}?></h4>
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
                <form id="form" autocomplete="off" class="mod2">
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
                                <li class="text">Struttura :</li>
                                <li class="agileits-main"><i class="fa fa-home" aria-hidden="true"></i><input
                                            id="partner" name="partner" placeholder="Struttura" class="typeahead"
                                            type="text" required/>
                                </li>
                                <li class="text">Ora :</li>
                                <li id="time" class="agileits-main"><i class="fa fa-clock-o"
                                                                       aria-hidden="true"></i><input
                                            class="date" placeholder="Ora" name="time" id="timepicker" type="text"
                                            value=""/>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-xs-6 w3l-right-mk">
                            <ul>
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
                                <li class="text"><br></li>
                                <li class="agileits-main">
                                    <div>
                                        <input id="allDay" name="allDay" type="checkbox"/>
                                        <label for="allDay">Renditi disponibile tutto il giorno</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        
                        
                        


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
                        <button id="saveChange" type="button" class="btn btn-primary">Si, rimuovi</button>
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
